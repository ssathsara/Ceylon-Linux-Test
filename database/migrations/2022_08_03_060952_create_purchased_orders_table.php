<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_orders', function (Blueprint $table) {
            $table->increments('po_no');
            $table->integer('zone');
            $table->integer('region');
            $table->integer('territory');
            $table->decimal('distributor');
            $table->date('date');
            $table->string('remark');
            $table->integer('sku_code');
            $table->integer('qty');
            $table->decimal('total_price',12,2);
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
        Schema::dropIfExists('purchased_orders');
    }
}
