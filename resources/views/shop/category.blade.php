@extends('layouts.app')
@section('title', $category->title)
@section('content')
    <div class="container">
        @forelse($products as $product)
          <div class="row">
              <div class="col-sm-2">
                  <img height="150px" width="auto" src="/storage/images/{{$product->image}}" />
              </div>
              <div class="col-sm-10">
                  <h2><a href="{{route('product', $product->slug)}}">{{$product->title}}</a></h2>
                  <p>{!! $product->description !!}</p>
              </div>
          </div>
        @empty
            <h2 class="text-center">Ничего не найдено</h2>
        @endforelse

        {{$products->links()}}
    </div>
@endsection