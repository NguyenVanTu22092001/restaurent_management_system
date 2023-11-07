<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

use PDF;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'desc')->paginate(15);

        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function addMenuForReservation($encryptedId)
    {

        $categories = Category::all();
        $id = Crypt::decrypt($encryptedId);
        return view('add_menu', ['categories' => $categories, 'id' => $id]);
    }
    public function addFood(Request $request)
    {
        $reservationId = $request->reservation_id;
        $productIds = $request->product_ids;
        $quantities = $request->quantities;
        $total = 0;
        // Loop through the selected products and quantities and add them to the order
        foreach ($productIds as $key => $productId) {
            if ($quantities[$key] > 0) {
                $quantity = $quantities[$key];
                $product = Product::findOrFail($productId);
                $total += (($product->special_price) * $quantity) * 1.15;
            }
        }

        if ($total > 0) {

            $order = Order::create([
                'total_amount' => $total,
                'reservation_id' => $reservationId,
            ]);

            foreach ($productIds as $key => $productId) {
                $quantity = $quantities[$key];
                if ($quantity > 0) {
                    // Create an OrderItem and associate it with the order and product
                    $orderItem = new OrderItem([
                        'order_id' => $order->id,
                        'product_id' => $productId,
                        'quantity' => $quantity,
                    ]);
                    $orderItem->save();
                }
            }
            return Redirect::back();
        } else {
            return Redirect::back();
        }
    }
    public function seeOrder($ecryptId)
    {
        $reservationId = Crypt::decrypt($ecryptId);
        $orderItems = OrderItem::whereHas('order.reservation', function ($query) use ($reservationId) {
            $query->where('id', $reservationId);
        })->get();
        $data = ['OrderItems' => $orderItems];
        return view('admin.order.index', compact('data'));
    }
    public function printOrder($ecryptId)
    {
        $valueStatus = 1;
        $reservationId = Crypt::decrypt($ecryptId);
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->status = $valueStatus;
        $reservation->save();
        $orderItems = OrderItem::whereHas('order.reservation', function ($query) use ($reservationId) {
            $query->where('id', $reservationId);
        })->get();
        $data = ['OrderItems' => $orderItems];

        $pdf = Pdf::loadView('admin.order.index',  compact('data'));

        return $pdf->stream('order' . $orderItems->first()->id . '.pdf');
        // return view('bill', compact('data'));
    }
    public function generateItemCode($productId, $dateTime)
    {
        // Extract the year, month, day, hour, and minute from the provided date and time
        $year = date('Y', strtotime($dateTime));
        $month = date('m', strtotime($dateTime));
        $day = date('d', strtotime($dateTime));
        $hour = date('H', strtotime($dateTime));
        $minute = date('i', strtotime($dateTime));

        // Create item code components
        $idComponent = 'I' . $productId;       // Example: I3
        $dateComponent = 'D' . $year . $month . $day; // Example: D20231102
        $timeComponent = 'T' . $hour . $minute;  // Example: T1140

        // Combine the components to form the final item code
        $itemCode = $idComponent . '-' . $dateComponent . '-' . $timeComponent;

        return $itemCode;
    }
    public function printBill($ecryptId)
    {
        $valueStatus = 2;
        $reservationId = Crypt::decrypt($ecryptId);
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->status = $valueStatus;
        $reservation->save();
        $orderItems = OrderItem::whereHas('order.reservation', function ($query) use ($reservationId) {
            $query->where('id', $reservationId);
        })->get();
        $billCode = 'item' . str_pad($reservationId, 4, '0', STR_PAD_LEFT);
        $dateTime = Carbon::parse($reservation->created_at)->format('Y-m-d H:i');

        $itemCode = $this->generateItemCode($reservationId, $dateTime);

        $data = ['OrderItems' => $orderItems];

        $pdf = Pdf::loadView('bill',  compact('data', 'itemCode'));

        return $pdf->stream('bill' . $ecryptId . '.pdf');
        // return view('bill', compact('data'));
    }
}
