<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ProductsModel;
use App\Models\SupplierModel;
use App\Models\CategoryModel;
use App\Models\UnitesModel;

class ProductsController extends Controller
{
    public function view()
    {
        $data = ProductsModel::all();
        return view('pages.product.ProductsView',compact('data'));
    }
    public function add()
    {
        $data['supplier'] = SupplierModel::all();
        $data['category'] = CategoryModel::all();
        $data['unite'] = UnitesModel::all();
        return view('pages.product.ProductsAdd',$data);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplier_id'=>'required',
            'category_id'=>'required',
            'unite_id'=>'required',
            'name'=>'required',
        ]);
        $data = new ProductsModel();
        $data->supplier_id = $request->supplier_id;
        $data->category_id = $request->category_id;
        $data->unit_id = $request->unite_id;
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('products.view')->with('success','New Product added success');
    }
    public function edit($id)
    {
        $data['editData'] = ProductsModel::find($id);
        $data['supplier'] = SupplierModel::all();
        $data['category'] = CategoryModel::all();
        $data['unite'] = UnitesModel::all();
        return view('pages.product.ProductsEdit',$data);
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'supplier_id'=>'required',
            'category_id'=>'required',
            'unite_id'=>'required',
            'name'=>'required',
        ]);

        $data = ProductsModel::find($id);
        $data->supplier_id = $request->supplier_id;
        $data->category_id = $request->category_id;
        $data->unit_id = $request->unite_id;
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('products.view')->with('success','Product edit success');
    }
    public function delete($id)
    {
        $supplier = ProductsModel::find($id);
        $supplier->delete();
        return redirect()->route('products.view')->with('success','Prduct delete success');
    }
}
