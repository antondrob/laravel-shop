@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />
        <form class="form-horizontal" action="{{route('admin.product.update', $product)}}" method="post">
            <input type="hidden" name="_method" value="put" />
            {{csrf_field()}}
            {{-- Form include --}}
            @include('admin.products.partials.form')
            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection