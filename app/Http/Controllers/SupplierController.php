<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\SupplierModel;

class SupplierController extends Controller
{
    public function view()
    {
        $data = SupplierModel::all();
        return view('pages.suppliers.SupplierView',compact('data'));
    }
    public function add()
    {
        return view('pages.suppliers.SupplierAdd');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'email'=>'required|unique:supplier_models',
            'address'=>'required',
        ]);
        $supplier = new SupplierModel();
        $supplier->name = $request->name;
        $supplier->mobile_no = $request->mobile_no;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect()->route('suppliers.view')->with('success','New Supplier added success');
    }
    public function edit($id)
    {
        $editData = SupplierModel::find($id);
        return view('pages.suppliers.SupplierEdit',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
            'email' => [
                'required',
                Rule::unique('supplier_models')->ignore($id),
            ],
        ]);

        $supplier = SupplierModel::find($id);
        $supplier->name = $request->name;
        $supplier->mobile_no = $request->mobile_no;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect()->route('suppliers.view')->with('success','Supplier edit success');
    }
    public function delete($id)
    {
        $supplier = SupplierModel::find($id);
        $supplier->delete();
        return redirect()->route('suppliers.view')->with('success','Supplier delete success');
    }
}
