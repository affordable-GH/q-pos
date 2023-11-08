<?php

use App\Http\Controllers\MainController;
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

Route::controller(MainController::class)->group(function () {  
    Route::get("/dashboard", "index")->name("dashboard");
    Route::get("/dashboard/products","products")->name("products");
    Route::get("/dashboard/orders","orders")->name("orders");
    Route::get("/dashboard/suppliers","suplliers")->name("suppliers");
    Route::get("/dashboard/sales-report","salesReport")->name("sales.report");
    Route::get("/dashboard/products","products")->name("product");
    Route::get("/dashboard/products","products")->name("product");
    Route::get("/dashboard/products","products")->name("product");
    Route::get("/dashboard/products","products")->name("product");
    Route::get("/dashboard/products","products")->name("product");

  });


