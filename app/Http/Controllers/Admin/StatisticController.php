<?php

namespace App\Http\Controllers\Admin;

use App\Exports\IncomeStatisticExport;
use App\Exports\MenuStatisticExport;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StatisticController extends Controller
{

    public function totalRevenueByYearAndMonth($year)
    {
        $order = new Order;
        $totalRevenueByMonth = [];

        // Start from January (month 1) and end in December (month 12)
        for ($month = 1; $month <= 12; $month++) {
            $totalRevenue = Order::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->sum('total_amount');

            $totalRevenueByMonth[$month] = $totalRevenue;
        }
    }


    public function getTotalRevenueByYear($year)
    {
        $totalRevenueByYear = [];


        $totalRevenueByMonth = [];

        // Loop through each month (from January to December)
        for ($month = 1; $month <= 12; $month++) {
            $totalRevenue = Order::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->sum('total_amount');

            $totalRevenueByMonth[$month] = $totalRevenue;
        }

        $totalRevenueByYear[$year] = $totalRevenueByMonth;


        return $totalRevenueByYear;
    }

    public function totalRevenue()
    {

        $currentYear = date('Y');
        $totalRevenue = $this->getTotalRevenueByYear($currentYear);

        return view('admin.statistic.total_revenue', ['totalRevenue' => $totalRevenue, 'year' => $currentYear]);
    }

    public function totalRevenueByYear(Request $request)
    {

        $currentYear = $request->year;
        $totalRevenue = $this->getTotalRevenueByYear($currentYear);

        return view('admin.statistic.total_revenue', ['totalRevenue' => $totalRevenue, 'year' => $currentYear]);
    }
    public function incomeStatement()
    {

        $reservations = Reservation::orderBy('id', 'desc')->where('status', '2')->get();
        $totalAmounts[] = [];

        foreach ($reservations as $reservation) {
            $totalAmounts[$reservation->id] = Order::where('reservation_id', $reservation->id)->sum('total_amount');
        }
        return view('admin.statistic.income_statement', [
            'reservations' => $reservations, 'totalAmounts' => $totalAmounts, 'end_date' => date('Y-m-d'), 'start_date' => date('Y-m-d')
        ]);
        // dd($totalAmounts);
    }
    public function incomeStatementByDate(Request $request)
    {
        $reservations = Reservation::orderBy('id', 'desc')
            ->where('status', '2')
            ->whereBetween('ReservationDate', [$request->start_date, $request->end_date])
            ->get();
        $totalAmounts[] = [];

        foreach ($reservations as $reservation) {
            $totalAmounts[$reservation->id] = Order::where('reservation_id', $reservation->id)->sum('total_amount');
        }
        return view('admin.statistic.income_statement', ['reservations' => $reservations, 'totalAmounts' => $totalAmounts, 'end_date' => $request->end_date, 'start_date' => $request->start_date]);
        // dd($totalAmounts);
    }
    public function menuRevenue()
    {
        $totalRevenue = [];
        // Calculate the 7 days ago timestamp
        // $sevenDaysAgo = Carbon::now()->subDays(7);

        // $orderItems = OrderItem::where('created_at', '>=', $sevenDaysAgo)
        //     ->orderBy('created_at')
        //     ->get();
        $orderItems = OrderItem::orderBy('created_at')->get();
        foreach ($orderItems as $orderItem) {
            $product_id = $orderItem->product_id;
            $product_name = $orderItem->product->name;

            if (array_key_exists($product_id, $totalRevenue)) {
                $totalRevenue[$product_id]['revenue'] += ($orderItem->quantity * $orderItem->product->price);
                $totalRevenue[$product_id]['quantity'] += $orderItem->quantity;
            } else {
                $totalRevenue[$product_id] = [
                    'name' => $product_name,
                    'revenue' => ($orderItem->quantity * $orderItem->product->price),
                    'quantity' => $orderItem->quantity,
                ];
            }
        }

        // Sort the array by quantity in descending order, then by revenue
        usort($totalRevenue, function ($a, $b) {
            $quantityComparison = $b['quantity'] - $a['quantity'];
            if ($quantityComparison === 0) {
                return $b['revenue'] - $a['revenue'];
            }
            return $quantityComparison;
        });

        return view('admin.statistic.menu_revenue', ['totalRevenue' => $totalRevenue]);
    }
    public function exportMenuStatistic()
    {
        return Excel::download(new MenuStatisticExport, 'MenuStatistic.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function exportIncomeStatistic(Request $request)
    {

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        return Excel::download(new IncomeStatisticExport($startDate, $endDate), 'income_statistics_' . $startDate . '_' . $endDate . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
