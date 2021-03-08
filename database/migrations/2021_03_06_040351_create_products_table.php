<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('po_name');
            $table->text('po_description');
            $table->string('po_image');
            $table->tinyInteger('po_gender')->default(0);
            $table->tinyInteger('po_hot')->default(0);
            $table->longText('po_info');
            $table->longText('po_policy')->nullable();
            $table->integer('po_quantity');
            $table->integer('po_brand');
            $table->string('po_category');
            $table->integer('po_provider');
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
        Schema::dropIfExists('products');
    }
}
