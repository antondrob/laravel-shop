@foreach($categories as $category)
    @if($category->children()->where('published', 1)->count())
        <li class="dropdown btn btn-link">
            <a href='{{url("/shop/category/$category->slug")}}' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$category->title}} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                @include('layouts.top_menu', ['categories' => $category->children])
            </ul>
    @else
        <li class="btn btn-link">
            <a href='{{url("/shop/category/$category->slug")}}'>{{$category->title}}</a>
    @endif
        </li>
@endforeach