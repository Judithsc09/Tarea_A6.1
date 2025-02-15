@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset($product["imagen"]) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('home.product', $product["id"]) }}"
          class="btn bg-primary text-white">{{ $product["nombre"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
