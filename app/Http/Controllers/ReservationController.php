<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    // public function store(Request $request)
    // {

    //     Reservation::create([

    //         'guest_number' => $request->seats,
    //         'res_date' => $request->date,
    //         'res_hour' => Carbon::parse($request->time),
    //         'name' =>  $request->seats,
    //         'email' =>  $request->seats,
    //         'tel_number' =>  $request->seats,
    //         'table_id' => '1',
    //     ]);
    //     dd($request);
    // }
    public function findavailabletable(Request $request)
    {
        $guestCount = (int)$request->input('seats');
        $reservationDate = $request->input('date');
        $reservationTime = Carbon::parse($request->input('time'));

        $availableTables = Table::where('guest_number', '>=', $guestCount)
            ->whereNotIn('id', function ($query) use ($reservationDate, $reservationTime) {
                $query->select('TableID')
                    ->from('Reservations')
                    ->whereDate('ReservationDate', '=', $reservationDate)
                    ->whereTime('ReservationTime', '=', $reservationTime);
            })
            ->pluck('id');
        $tableData = [];
        foreach ($availableTables as $availableTable) {
            $table = Table::find($availableTable);
            $hours = $table->hours;


            foreach ($hours as $hour) {

                $timeDifference = Carbon::parse($reservationTime->format('H:i'))->diffInMinutes($hour->res_hour);
                if ($timeDifference <= 30) {
                    $tableData[] = [
                        'table_id' =>  $availableTable,
                        'name' => $table->name,
                        'res_hour' => $hour->res_hour,
                        'res_date' => $reservationDate,
                        'seats' => (int)$request->input('seats')
                        // 'status' => $hour->pivot->status,
                    ];
                }
            }
        }


        $uniqueResHours = [];

        foreach ($tableData as $item) {
            $resHour = $item['res_hour'];
            if (!in_array($resHour, $uniqueResHours)) {
                $uniqueResHours[] = $resHour;
            }
        }
        $formattedTime = Carbon::parse($request->input('time'))->format('Hi');

        // Convert AM/PM time formats (5pm to 1700, 8pm to 2000)
        if (stripos($request->input('time'), 'pm') !== false) {
            $formattedTime = (int) $formattedTime + 1200;
        }
        $oldReservation = [
            'seats' =>  $request->input('seats'),
            'date' => Carbon::parse($request->input('date'))->format('Y-m-d'),
            'time' => Carbon::parse($request->input('time'))->format('h:i A'),
            'value_time' => $formattedTime
        ];
        session(['tableData' => $tableData]);

        return view('available_tables', ['tableData' => $tableData, 'uniqueResHours' => $uniqueResHours, 'oldReservation' => $oldReservation]);
    }
    public function confirmreservation(Request $request, $time)
    {
        $suitableTable = [];
        $tableData = session('tableData');
        foreach ($tableData as  $tableInfo) {

            if (Carbon::parse($tableInfo['res_hour'])->format('H:i') == $time) {
                $suitableTable = $tableInfo;
            }
        }

        session(['suitableTable' => $suitableTable]);
        return view('confirm_reservation');
    }
    public function storereservation(Request $request)
    {
        $suitableTable = session('suitableTable');
        if (Auth::check()) {
            $reservationData = Reservation::create([
                'UserID' => Auth::id(),
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'TableID' => $suitableTable['table_id'],
                'ReservationDate' => Carbon::parse($suitableTable['res_date'])->format('Y-m-d'),
                'ReservationTime' => $suitableTable['res_hour'],
                'seats' => $suitableTable['seats']
            ]);
        }
        $hour = Hour::where('res_hour', $reservationData->ReservationTime)->first();
        DB::table('hour_table')->where('table_id', $reservationData->TableID)->where('hour_id', $hour->id)->update(['status' => 'using']);
        session()->forget('tableData');

        $encryptedId = Crypt::encrypt($reservationData->id);
        return to_route('information-reservation', ['encryptedId' => $encryptedId]);
    }
    public function informationreservation($id)
    {
        $id =  Crypt::decrypt($id);
        $reservationData = Reservation::findOrFail($id);
        return view('information_reservation', ['reservationData' => $reservationData]);
    }
}
