<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
   private $products =[["nombre" => "tv","descripcion" => "tele 4k","imagen"=>"/img/game.png", "precio" => "400 euros"],
                      ["nombre" => "iphone","descripcion" => "movil de apple","imagen"=>"/img/safe.png", "precio" => "1000 euros"], 
                      ["nombre" => "ordenador","descripcion" => "Ordenador de alta gama","imagen"=>"/img/submarine.png", "precio" => "2500 euros"]];

    public function index()
    {

        return view("home.products")->with("products",$this->products);





    }



}



?>