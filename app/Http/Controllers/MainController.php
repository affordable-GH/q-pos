<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("layout.layout");
    }
    public function products()
    {
        return view("pages.products");
    }
    public function orders()
    {
        return view("pages.orders");
    }
    public function suppliers()
    {
        return view("pages.suppliers");
    }
    public function salesReport()
    {
        return view("pages.sales-report");
    }
    public function customers()
    {
        return view("pages.customers");
    }
}
