<?php

use App\Http\Controllers\Addmin\CategoryController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use App\Models\IngredientSupply;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/menus', [App\Http\Controllers\HomeController::class, 'menus']);
Route::get('/reservation', [App\Http\Controllers\HomeController::class, 'reservation']);
Route::get('/ourstory', function () {
    return view('ourstory');
})->name('ourstory');

Route::get('/bill', function () {
    return view('bill');
})->name('bill');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('addfood', [App\Http\Controllers\Admin\ReservationController::class, 'addFood'])->name('addfood');
Route::post('/find-available-table', [App\Http\Controllers\ReservationController::class, 'findavailabletable']);
Route::get('/confirm-reservation/{time}', [App\Http\Controllers\ReservationController::class, 'confirmreservation']);
Route::post('/store-reservation', [App\Http\Controllers\ReservationController::class, 'storereservation']);
Route::get('/information-reservation/{encryptedId}', [App\Http\Controllers\ReservationController::class, 'informationreservation'])->name('information-reservation');

//route to login google, github
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Route::middleware(['auth', 'role:admin|warehouse_staff|waiter'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::get('/add-menu/{encryptedId}', [App\Http\Controllers\Admin\ReservationController::class, 'addMenuForReservation']);
    Route::get('/checkout/{encryptedId}', [App\Http\Controllers\Admin\ReservationController::class, 'checkout']);
    Route::get('/order/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'seeOrder']);
    Route::get('/print-order/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'printOrder']);
    Route::get('/print-bill/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'printBill']);

    Route::get('/statistic/total-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'totalRevenue'])->name('total-revenue');
    Route::post('/statistic/total-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'totalRevenueByYear']);
    Route::get('/statistic/income-statement', [App\Http\Controllers\Admin\StatisticController::class, 'incomeStatement'])->name('income-statement');
    Route::post('/statistic/income-statement', [App\Http\Controllers\Admin\StatisticController::class, 'incomeStatementByDate']);
    Route::get('/statistic/menu-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'menuRevenue'])->name('menu-revenue');
    Route::post('/export-menu-statistic', [App\Http\Controllers\Admin\StatisticController::class, 'exportMenuStatistic'])->name('export-menu-statistic');
    Route::post('/export-income-statistic', [App\Http\Controllers\Admin\StatisticController::class, 'exportIncomeStatistic'])->name('export-income-statistic');



    Route::get('/stock/export', [App\Http\Controllers\Admin\StockController::class, 'exportIngredient'])->name('export-ingredient');
    Route::post('/stock/exportquanity', [App\Http\Controllers\Admin\StockController::class, 'exportQuantityIngredient'])->name('exportquantity');
    Route::resource('/stock', 'App\Http\Controllers\Admin\StockController');
    // Route::resource('/ingredientsupply', 'App\Http\Controllers\Admin\IngredientSupplyController');
    // Route::get('/stock/import', [App\Http\Controllers\Admin\StockController::class, 'importIngredient'])->name('import-ingredient');


    Route::resource('/category', 'App\Http\Controllers\Admin\CategoryController');
    Route::resource('/product', 'App\Http\Controllers\Admin\ProductController');
    Route::resource('/combo', 'App\Http\Controllers\Admin\ComboController');
    Route::resource('/hour', 'App\Http\Controllers\Admin\HourController');
    Route::resource('/ingredient', 'App\Http\Controllers\Admin\IngredientController');

    Route::resource('/reservation', 'App\Http\Controllers\Admin\ReservationController');
    Route::post('/reservation-by-date', [App\Http\Controllers\Admin\ReservationController::class, 'reservationByDate']);

    Route::resource('/supplier', 'App\Http\Controllers\Admin\SupplierController');
    Route::resource('/table', 'App\Http\Controllers\Admin\TableController');

    Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::post('/user/store', [App\Http\Controllers\Admin\UserController::class, 'store']);

    Route::get('/test', [App\Http\Controllers\Admin\TableController::class, 'test']);
});
require __DIR__ . '/auth.php';
