<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $customer=Customer::all();
        return view('customer.customer',compact('customer'));
    }
    public function create(){
        return view('customer.createCustomer');
    }
    public function store(Request $request){
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->contact_no=$request->contact_no;
        $customer->save();
        $notification=array(
            'messege'=>'Customer Created Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.customer')->with($notification);
        
    }
    public function edit($id){
        $customer=Customer::find($id);
        return view('customer.editCustomer',compact('customer'));
    }
    public function update(Request $request,$id){
        $customer=Customer::find($id);
        $customer->name=$request->name;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->contact_no=$request->contact_no;
        $customer->update();
        $notification=array(
            'messege'=>'Customer Details updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.customer')->with($notification);
    }
    public function delete($id){
        $customer=Customer::find($id);
        $customer->delete();
        $notification=array(
            'messege'=>'Customer Deleted Successfully',
            'alert-type'=>'error'
        );
        return redirect()->route('all.customer')->with($notification);
    }
}
