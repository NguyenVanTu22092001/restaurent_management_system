<?php

use App\Http\Controllers\Addmin\CategoryController;

use App\Http\Controllers\ProfileController;
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

Route::get('/ourstory', function () {
    return view('ourstory');
})->name('ourstory');
Route::get('/reservation', function () {
    return view('reservation');
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



Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::get('/add-menu/{encryptedId}', [App\Http\Controllers\Admin\ReservationController::class, 'addMenuForReservation']);
    Route::get('/order/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'seeOrder']);
    Route::get('/print-order/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'printOrder']);
    Route::get('/print-bill/{ecryptId}', [App\Http\Controllers\Admin\ReservationController::class, 'printBill']);
    Route::get('/statistic/total-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'totalRevenue'])->name('total-revenue');
    Route::post('/statistic/total-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'totalRevenueByYear']);
    Route::get('/statistic/income-statement', [App\Http\Controllers\Admin\StatisticController::class, 'incomeStatement'])->name('income-statement');
    Route::post('/statistic/income-statement', [App\Http\Controllers\Admin\StatisticController::class, 'incomeStatementByDate']);
    Route::get('/statistic/menu-revenue', [App\Http\Controllers\Admin\StatisticController::class, 'menuRevenue'])->name('menu-revenue');


    Route::resource('/category', 'App\Http\Controllers\Admin\CategoryController');
    Route::resource('/product', 'App\Http\Controllers\Admin\ProductController');
    Route::resource('/combo', 'App\Http\Controllers\Admin\ComboController');
    Route::resource('/hour', 'App\Http\Controllers\Admin\HourController');
    Route::resource('/ingredient', 'App\Http\Controllers\Admin\IngredientController');
    Route::resource('/reservation', 'App\Http\Controllers\Admin\ReservationController');
    Route::resource('/supplier', 'App\Http\Controllers\Admin\SupplierController');
    Route::resource('/table', 'App\Http\Controllers\Admin\TableController');
});
require __DIR__ . '/auth.php';
// Tuần này các em phải xong được phần biểu đồ lớp và phần CSDL nhé (Thiết kế + cài đặt).
// Cần đảm bảo biểu đồ lớp và CSDL bao phủ hết các chức năng đã đề ra
