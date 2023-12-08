<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Hour;
use App\Models\HourTable;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tables = Table::with('hourTables')->get();


        return view('admin.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hours = Hour::all();
        return view('admin.table.create', compact('hours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TableStoreRequest $request)
    {
        $table = Table::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,

        ]);

        if ($request->has('hours')) {
            $table->hours()->attach($request->hours);
        }

        return to_route('admin.table.index')->with('success', 'Table created successfully.');
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
    public function test()
    {
        try {
            DB::table('hour_table')->where('table_id', 7)
                ->where('hour_id', 8)
                ->update(['status' => 'available']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
