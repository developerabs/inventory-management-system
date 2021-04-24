<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ProductsModel;
use App\Models\SupplierModel;
use App\Models\CategoryModel;
use App\Models\UnitesModel;
use App\Models\PurchaseModel;
use DB;

class PurchaseController extends Controller
{
    public function view()
    {
        $data = PurchaseModel::orderBy('date','desc')->orderBy('id','desc')->get();
        return view('pages.purchase.PurchaseView',compact('data'));
    }
    public function add()
    {
        $data['supplier'] = SupplierModel::all();
        $data['category'] = CategoryModel::all();
        $data['unite'] = UnitesModel::all();
        return view('pages.purchase.PurchaseAdd',$data);
    }
    public function store(Request $request)
    {
        if ($request->category_id == null) {
           return redirect()->back()->with('erroe','Sorry!You did not select any item');
        }else{
            $count_category = count($request->category_id);
            for ($i=0; $i < $count_category ; $i++) { 
                $data = new PurchaseModel();
                $data->date = date('Y-m-d',strtotime($request->date[$i]));
                $data->purchase_no = $request->purchase_no[$i];
                $data->supplier_id = $request->supplier_id[$i];
                $data->category_id = $request->category_id[$i];
                $data->product_id = $request->product_id[$i];
                $data->buying_qty = $request->buying_qty[$i];
                $data->unit_price = $request->unit_price[$i];
                $data->buying_price = $request->buying_price[$i];
                $data->description = $request->description[$i];
                $data->created_by = Auth::user()->id;
                $data->save();
            }
            return redirect()->route('purchase.view')->with('success','Purchases added success');
        }
        
    }
    public function approveList()
    {
        $data = PurchaseModel::orderBy('date','desc')->orderBy('id','desc')->where('status','0')->get();
        return view('pages.purchase.ApproveList',compact('data'));
    }
    public function approve($id)
    {
        $purchase = PurchaseModel::find($id);
        $product = ProductsModel::where('id',$purchase->product_id)->first();
        $purchase_qty = ((float)($purchase->buying_qty))+((float)($product->quantity));
        $product->quantity = $purchase_qty;
        if ($product->save()) {
            DB::table('purchase_models')->where('id',$id)->update(['status'=>'1']);
        }
        return redirect()->route('purchase.approve.list')->with('success','Purchase approved success');
    }
    public function delete($id)
    {
        $data = PurchaseModel::find($id);
        $data->delete();
        return redirect()->route('purchase.view')->with('success','Purchase delete success');
    }
}
