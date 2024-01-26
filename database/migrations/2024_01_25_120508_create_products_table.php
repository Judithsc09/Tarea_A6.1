<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


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
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen');
            $table->decimal('precio', 10, 2);
            $table->timestamps(); // created_at y updated_at
        });

        /*

        // Insertar datos iniciales
        $products = [
            ["nombre" => "tv", "descripcion" => "tele 4k", "imagen" => "/img/game.png", "precio" => "400"],
            ["nombre" => "iphone", "descripcion" => "movil de apple", "imagen" => "/img/safe.png", "precio" => "1000"],
            ["nombre" => "ordenador", "descripcion" => "Ordenador de alta gama", "imagen" => "/img/submarine.png", "precio" => "2500"],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
        */
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
