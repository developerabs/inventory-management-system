<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\UnitesModel;
use Auth;

class UnitesController extends Controller
{
    public function view()
    {
        $data = UnitesModel::all();
        return view('pages.unite.UnitesView',compact('data'));
    }
    public function add()
    {
        return view('pages.unite.UnitesAdd');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
        ]);
        $supplier = new UnitesModel();
        $supplier->name = $request->name;
        $supplier->created_by = Auth::user()->id;
        $supplier->save();
        return redirect()->route('unites.view')->with('success','New unite added success');
    }
    public function edit($id)
    {
        $editData = UnitesModel::find($id);
        return view('pages.unite.UnitesEdit',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name'=>'required',
        ]);

        $supplier = UnitesModel::find($id);
        $supplier->name = $request->name;
        $supplier->updated_by =  Auth::user()->id;
        $supplier->save();
        return redirect()->route('unites.view')->with('success','Unite updated success');
    }
    public function delete($id)
    {
        $supplier = UnitesModel::find($id);
        $supplier->delete();
        return redirect()->route('unites.view')->with('success','Unite deleted success');
    }
}
