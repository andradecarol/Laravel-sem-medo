<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'image'); //A coluna image vai ler a ref. da imagem
            $table->timestamps();
            $table->softDeletes(); //Cria uma colina do tipo data e hora, chamada Deleted, essa coluna não ficará visível.
            //Então ao exluir algo, ela virá pra essa coluna, mas o que foi excluido poderá ser resgatado, deixando a colune
            //deleted como null novamente
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
