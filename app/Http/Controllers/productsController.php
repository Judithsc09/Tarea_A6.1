<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class productsController extends Controller
{
    public function index()
    {
        $viewData=[];
        $products = Product::all();
        $viewData["title"]="productos";
        $viewData["subtitle"]="Listado Productos";
        $viewData["products"]=$products;
        return view('home.products')->with("viewData",$viewData);
    }


    public function show($id)
    {
        $viewData=[];
        $product = Product::find($id);
        $viewData["title"]="productos".$id;
        $viewData["subtitle"]="Listado Productos".$id;
        $viewData["product"]=$product;
        return view('home.product')->with("viewData", $viewData);
    }



}



?>