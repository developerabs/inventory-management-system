<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    public function supplier()
    {
        return $this->belongsTo(SupplierModel::class,'supplier_id','id');
    }
    public function category()
    {
        return $this->belongsTo(CategoryModel::class,'category_id','id');
    }
    public function unite()
    {
        return $this->belongsTo(UnitesModel::class,'unit_id','id');
    }
}