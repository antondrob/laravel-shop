@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категории {{$count_categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Товары {{$count_products}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетители</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетители сегодня</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Добавить категрию</a>
                @foreach($categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">{{$category->products()->count()}}</p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Добавить товар</a>
                @foreach($products as $product)
                    <a class="list-group-item" href="{{route('admin.product.edit', $product)}}">
                        <h4 class="list-group-item-heading">{{$product->title}}</h4>
                        <p class="list-group-item-text">{{$product->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                    @endforeach
                </a>
            </div>
        </div>
    </div>
@endsection