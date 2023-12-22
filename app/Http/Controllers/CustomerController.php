<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CustomerStoreRequest;
use Inertia\Inertia;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia('index',[
            'customers' =>  Customer::all()
        ]);
    }
    public function create($id = -1)
    {
        if($id > 0){
            $customer = Customer::find($id);
        }else{
            $customer = new Customer();
        }
        return Inertia('create',['customer'=>$customer]);
    }
    public function store(CustomerStoreRequest $request,$id = -1)
    {
        if($id > 0){
            $customer = Customer::find($id);
            $customer->update($request->validated());
            $message = 'Customer updated successfully.';
        }else{
            Customer::create($request->validated());
            $message = 'Customer created successfully.';
        }
        return Redirect::route('customers.index')->with('message',$message);
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        $message = 'Customer deleted successfully.';
        return Redirect::route('customers.index')->with('message',$message);
    }
}
