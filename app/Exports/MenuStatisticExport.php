<?php

namespace App\Exports;

use App\Models\OrderItem;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MenuStatisticExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $totalRevenue = [];
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
                    'quantity' => $orderItem->quantity,
                    'revenue' => ($orderItem->quantity * $orderItem->product->price),
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
        return collect($totalRevenue);
    }
    public function headings(): array
    {
        return ["name", "quantity", "total"];
    }
}
