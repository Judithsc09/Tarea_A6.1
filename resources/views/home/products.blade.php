@extends('layouts.app')

@section("title", "Productos")

@section("subtitle", " Listado Productos")

@section("content")

<div class="row">

       @foreach($products as $producto)

       <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset($producto['imagen']) }}" class="img-fluid rounded">

            <a href="">{{($producto['nombre']) }} </a>

        </div>

       @endforeach


    </div>

    @endsection