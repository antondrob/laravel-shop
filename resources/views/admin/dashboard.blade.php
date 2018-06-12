@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категории</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Товары</span></p>
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
                <a class="btn btn-block btn-default" href="#">Добавить категрию</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">Количество товаров</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Добавить товар</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Товар первый</h4>
                    <p class="list-group-item-text">Категория</p>
                </a>
            </div>
        </div>
    </div>
@endsection