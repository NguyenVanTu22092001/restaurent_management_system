<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use App\Models\Order;
use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IncomeStatisticExport implements FromQuery, WithHeadings
{

    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function query()
    {
        return Reservation::orderBy('id', 'desc')
            ->where('status', '2')
            ->whereBetween('ReservationDate', [$this->startDate, $this->endDate])->select('name', 'email', 'phone', 'ReservationDate', 'ReservationTime', 'seats', \Illuminate\Support\Facades\DB::raw("(SELECT SUM(total_amount) FROM orders WHERE orders.reservation_id = reservations.id) as totalAmount"));
        // return Reservation::withCount([
        //     'orders as totalAmount' => function ($query) {
        //         $query->select(\Illuminate\Support\Facades\DB::raw('IFNULL(SUM(total_amount), 0)'));
        //     }
        // ])
        //     ->orderBy('id', 'desc')
        //     ->where('status', '2')
        //     ->whereBetween('ReservationDate', [$this->startDate, $this->endDate])
        //     ->select('name', 'email', 'phone', 'ReservationDate', 'ReservationTime', 'seats');
    }
    public function headings(): array
    {
        return ["name", "email", "phone", "date", "time", "seat", "total"];
    }
}
