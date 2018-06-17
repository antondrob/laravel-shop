@foreach ($categories as $category)

    <option value="{{$category->id or ""}}"
        @isset($product->id)
          @foreach($product->categories as $product_category)
            @if($category->id == $product_category->id)
                selected
            @endif
          @endforeach
        @endisset
    >
        {!! $delimiter or "" !!}{{$category->title or ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.products.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach