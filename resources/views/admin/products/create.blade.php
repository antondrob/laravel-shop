@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Добавление товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />
        <form class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.product.store')}}" method="post">
            {{csrf_field()}}
            {{-- Form include --}}
            @include('admin.products.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection