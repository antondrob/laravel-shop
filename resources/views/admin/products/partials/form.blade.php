<label>Статус</label>
<select class="form-control" name="published">

    @if (isset($product->id))
        <option value="0" @if($product->published == 0) selected="" @endif> Не опубликовано</option>
        <option value="1" @if($product->published == 1) selected="" @endif> Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label>Наименование товара</label>
<input type="text" class="form-control" name="title" placeholder="Наименование товара" value="{{$product->title or ""}}" required />
<label>Артикул</label>
<input type="text" class="form-control" name="sku" placeholder="Артикул" value="{{$product->sku or ""}}" required />
<label>Изображение товара</label><br />
<input type="file" name="image" accept="image/*"><br />
<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$product->slug or ""}}" readonly />

<label>Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">-- без родительской категории --</option>
    @include('admin.products.partials.categories', ['categories' => $categories])
</select>
<label>Описание товара</label>
<textarea class="form-control" id="description" name="description">{{$product->description or ""}}</textarea>
<hr />
<input class="btn btn-primary" type="submit" value="Сохранить" />