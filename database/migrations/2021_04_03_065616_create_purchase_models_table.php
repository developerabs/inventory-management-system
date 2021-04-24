<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_models', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->string('category_id');
            $table->string('unit_id');
            $table->string('product_id');
            $table->string('purchase_no');
            $table->date('date');
            $table->string('description')->nullable();
            $table->string('buying_qty');
            $table->string('unit_price');
            $table->string('buying_price');
            $table->string('status')->default('0')->comment('0=Panding,1=Approved');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_models');
    }
}
