@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Каталог товаров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить товар</a>
        <table class="table table-striped">
            <thead>
            <th>Картинка</th>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td><img height="100px" src="/storage/images/{{$product->image}}" /></td>
                    <td>{{$product->title}}</td>
                    <td>@if($product->published == 1) Опубликовано @else Не опубликовано @endif</td>
                    <td class="text-right">
                        <form action="{{route('admin.product.destroy', $product)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE" />
                            {{csrf_field()}}
                            <a class="btn btn-secondary" href="{{route('admin.product.edit', $product)}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{$products->links()}}
                </ul>
            </td>
            </tfoot>
        </table>
    </div>

@endsection