<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CategoryModel;
use Auth;

class CategoryController extends Controller
{
    public function view()
    {
        $data = CategoryModel::all();
        return view('pages.category.CategorysView',compact('data'));
    }
    public function add()
    {
        return view('pages.category.CategorysAdd');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
        ]);
        $supplier = new CategoryModel();
        $supplier->name = $request->name;
        $supplier->created_by = Auth::user()->id;
        $supplier->save();
        return redirect()->route('categorys.view')->with('success','New Category added success');
    }
    public function edit($id)
    {
        $editData = CategoryModel::find($id);
        return view('pages.category.CategorysEdit',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name'=>'required',
        ]);

        $supplier = CategoryModel::find($id);
        $supplier->name = $request->name;
        $supplier->updated_by =  Auth::user()->id;
        $supplier->save();
        return redirect()->route('categorys.view')->with('success','Category updated success');
    }
    public function delete($id)
    {
        $supplier = CategoryModel::find($id);
        $supplier->delete();
        return redirect()->route('categorys.view')->with('success','Category deleted success');
    }
}
