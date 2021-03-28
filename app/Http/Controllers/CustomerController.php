<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CustomerModel;
use Auth;

class CustomerController extends Controller
{
    public function view()
    {
        $data = CustomerModel::all();
        return view('pages.customers.CustomersView',compact('data'));
    }
    public function add()
    {
        return view('pages.customers.CustomerAdd');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
        ]);
        $data = new CustomerModel();
        $data->name = $request->name;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('customers.view')->with('success','New Customer added success');
    }
    public function edit($id)
    {
        $editData = CustomerModel::find($id);
        return view('pages.customers.CustomersEdit',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
        ]);

        $data = CustomerModel::find($id);
        $data->name = $request->name;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->updated_by =  Auth::user()->id;
        $data->save();
        return redirect()->route('customers.view')->with('success','Customer edit success');
    }
    public function delete($id)
    {
        $supplier = CustomerModel::find($id);
        $supplier->delete();
        return redirect()->route('customers.view')->with('success','Customers delete success');
    }
}
