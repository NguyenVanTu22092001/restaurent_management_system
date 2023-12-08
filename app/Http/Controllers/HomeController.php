<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function menus()
    {
        $categoryShareables = Category::where('name', 'like', '%wine%')->get();

        $shareables = [];
        foreach ($categoryShareables as $category) {
            $products = $category->products;
            // Merge the products into the $shareables array
            $shareables = array_merge($shareables, $products->toArray());
        }

        $shareables = collect($shareables)->unique('id');
        $shareables = Product::whereIn('id', $shareables->pluck('id')->all())->with('categories')->get();

        $categorysides = Category::where('name', 'like', '%side%')->get();
        $sides = [];
        foreach ($categorysides as $category) {
            $products = $category->products;
            // Merge the products into the $sides array
            $sides = array_merge($sides, $products->toArray());
        }
        $sides = collect($sides)->unique('id');
        $sides = Product::whereIn('id', $sides->pluck('id')->all())->with('categories')->get();

        $categorywines = Category::where('name', 'like', '%wine%')->get();
        $wines = [];
        foreach ($categorywines as $category) {
            $products = $category->products;
            // Merge the products into the $wines array
            $wines = array_merge($wines, $products->toArray());
        }
        $wines = collect($wines)->unique('id');
        $wines = Product::whereIn('id', $wines->pluck('id')->all())->with('categories')->get();

        $categorybreakfasts = Category::where('name', 'like', '%breakfast%')->get();
        $breakfasts = [];
        foreach ($categorybreakfasts as $category) {
            $products = $category->products;
            // Merge the products into the $breakfasts array
            $breakfasts = array_merge($breakfasts, $products->toArray());
        }
        $breakfasts = collect($breakfasts)->unique('id');
        $breakfasts = Product::whereIn('id', $breakfasts->pluck('id')->all())->with('categories')->get();

        $categorysalads = Category::where('name', 'like', '%Soups and Salad%')->get();
        $salads = [];
        foreach ($categorysalads as $category) {
            $products = $category->products;
            // Merge the products into the $salads array
            $salads = array_merge($salads, $products->toArray());
        }
        $salads = collect($salads)->unique('id');
        $salads = Product::whereIn('id', $salads->pluck('id')->all())->with('categories')->get();

        $categorysandwiches = Category::where('name', 'like', '%Sandwiches%')->get();
        $sandwiches = [];
        foreach ($categorysandwiches as $category) {
            $products = $category->products;
            // Merge the products into the $sandwiches array
            $sandwiches = array_merge($sandwiches, $products->toArray());
        }
        $sandwiches = collect($sandwiches)->unique('id');
        $sandwiches = Product::whereIn('id', $sandwiches->pluck('id')->all())->with('categories')->get();

        $categorycocktails = Category::where('name', 'like', '%Boozy Cocktails%')->get();
        $cocktails = [];
        foreach ($categorycocktails as $category) {
            $products = $category->products;
            // Merge the products into the $cocktails array
            $cocktails = array_merge($cocktails, $products->toArray());
        }
        $cocktails = collect($cocktails)->unique('id');
        $cocktails = Product::whereIn('id', $cocktails->pluck('id')->all())->with('categories')->get();

        $categorynonboozys = Category::where('name', 'like', '%Non Boozy%')->get();
        $nonboozys = [];
        foreach ($categorynonboozys as $category) {
            $products = $category->products;
            // Merge the products into the $nonboozys array
            $nonboozys = array_merge($nonboozys, $products->toArray());
        }
        $nonboozys = collect($nonboozys)->unique('id');
        $nonboozys = Product::whereIn('id', $nonboozys->pluck('id')->all())->with('categories')->get();

        $categoryboozyshakes = Category::where('name', 'like', '%Boozy Shakes%')->get();
        $boozyshakes = [];
        foreach ($categoryboozyshakes as $category) {
            $products = $category->products;
            // Merge the products into the $boozyshakes array
            $boozyshakes = array_merge($boozyshakes, $products->toArray());
        }
        $boozyshakes = collect($boozyshakes)->unique('id');
        $boozyshakes = Product::whereIn('id', $boozyshakes->pluck('id')->all())->with('categories')->get();

        $categorycans = Category::where('name', 'like', '%Cans & Bottles%')->get();
        $cans = [];
        foreach ($categorycans as $category) {
            $products = $category->products;
            // Merge the products into the $cans array
            $cans = array_merge($cans, $products->toArray());
        }
        $cans = collect($cans)->unique('id');
        $cans = Product::whereIn('id', $cans->pluck('id')->all())->with('categories')->get();


        $categorybeers = Category::where('name', 'like', '%Draft Beers%')->get();
        $beers = [];
        foreach ($categorybeers as $category) {
            $products = $category->products;
            // Merge the products into the $beers array
            $beers = array_merge($beers, $products->toArray());
        }
        $beers = collect($beers)->unique('id');
        $beers = Product::whereIn('id', $beers->pluck('id')->all())->with('categories')->get();
        return view('menus', [
            'shareables' => $shareables, 'sides' => $sides, 'wines' => $wines, 'breakfasts' => $breakfasts, 'salads' => $salads,
            'sandwiches' => $sandwiches, 'cocktails' => $cocktails, 'nonboozys' => $nonboozys,
            'boozyshakes' => $boozyshakes, 'cans' => $cans, 'beers' => $beers
        ]);
    }
    public function reservation()
    {

        if (Auth::check()) {
            return view('reservation');
        } else {
            return redirect('register');
        }
    }
}
