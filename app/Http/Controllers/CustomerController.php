<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        //$customers = \App\Customer::all();
        $customers = (new Customer())->all();

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $customers = new Customer();

        return view('customers.create', compact('customers'));
    }
    
    public function store()
    {
        $data = request()->validate(
            ['name' => 'required|min:1', 'email' => 'required|min:1']
            );

        \App\Customer::create($data);

        return redirect()->back();
    }
} 