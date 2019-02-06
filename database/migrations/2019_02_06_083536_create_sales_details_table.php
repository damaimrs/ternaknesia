<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sales_id');
            $table->unsignedInteger('product_id');
            $table->integer('qty');

            $table->foreign('sales_id')
             ->references('id')
             ->on('sales')
             ->onUpdate('cascade')
             ->onDelete('cascade');

        $table->foreign('product_id')
             ->references('id')
             ->on('products')
             ->onUpdate('cascade')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
