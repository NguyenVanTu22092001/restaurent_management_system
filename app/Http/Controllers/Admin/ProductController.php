<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $image = $request->file('image')->store('public/product');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'special_price' => $request->special_price,
        ]);

        if ($request->has('categories')) {
            $product->categories()->attach($request->categories);
        }

        return to_route('admin.product.index')->with('success', 'product created successfully.');
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
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
    public function destroy(Product $product)
    {
        !is_null($product->image) && Storage::delete($product->image);

        // dd($product);
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('admin.product.index')->with('danger', 'product deleted successfully.');
    }
}
