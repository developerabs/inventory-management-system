<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ProductsModel;
use App\Models\SupplierModel;
use App\Models\CategoryModel;
use App\Models\UnitesModel;

class DefaultController extends Controller
{
    public function getCategory(Request $request)
    {
        $supplier_id = $request->supplier_id;
        $allcategory = ProductsModel::with(['category'])->select('category_id')
                    ->where('supplier_id',$supplier_id)->groupBy('category_id')->get();
        return response()->json($allcategory);
    }
    public function getProduct(Request $request)
    {
        $category_id = $request->category_id;
        $allProduct = ProductsModel::where('category_id',$category_id)->get();
        return response()->json($allProduct);
    }
}
