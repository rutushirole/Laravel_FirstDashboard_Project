<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
   public function create(){
    return view('customer');
   }

   public function store(Request $request){
    $customer= new Customer;
    $customer->name= $request['name'];
    $customer->email= $request['email'];
    $customer->password= md5($request['password']);
    $customer->confirm_password=md5($request['confirm_password']);
    $customer->country= $request['country'];
    $customer->state= $request['state'];
    $customer-> save();
    
    return redirect('/customer');
   }

   public function view(){
     $customers= Customer::all();
     $data=compact('customers');
     return view('customer-view')->with($data);
   }
}
