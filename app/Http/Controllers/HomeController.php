<?php

namespace App\Http\Controllers;

use App\BookService;
use App\Customer;
use App\Technician;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technician= Technician::all()->count();
        return view('layouts.master',['technician' => $technician]);

    }
    public function create()
    {
        $customer=Customer::all()->count();
        $bookService=BookService::all()->count();
        $technician= Technician::all()->count();
        return view('home',['technician' => $technician,
            'bookService' => $bookService,
            'customer'=> $customer]);
    }
}
