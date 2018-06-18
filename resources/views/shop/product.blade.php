@extends('layouts.app')
@section('title', $product->title)
@section('title', $product->description)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="/storage/images/{{$product->image}}" />
            </div>
            <div class="col-sm-6">
                <h1><a>{{$product->title}}</a></h1>
                <p>{!! $product->description !!}</p>
                <button type="button" class="btn btn-primary btn-lg btn-block">Добавить в корзину</button>
            </div>
        </div>
    </div>
@endsection