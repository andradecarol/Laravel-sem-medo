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
            $table->foreignId(column: 'category_id')->constrained();
            $table->string(column:'name');
            $table->text(column:'description');
            $table->boolean(column:'exclusive');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign(columns: 'category_id')->references(columns: 'id')->on(table: 'categories');
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
