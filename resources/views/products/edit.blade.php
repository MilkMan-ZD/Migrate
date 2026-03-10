<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="flex justify-between">
        <h1>Интернет магазин</h1>
        <nav>
            <ul class="flex gap-4">
                <li><a href="{{route('products.index')}}">Главная</a></li>
                <li><a href="{{route('products.create')}}">Создать продукт</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container mx-auto">
            <h2>Редактирование информации о продукте</h2>
            <form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
                @csrf
                @method('put')
                <label for="title">Название продукта</label><br>
                <input type="text" name="title" id="" value="{( $product->title )}" require><br>
                <label for="price">Цена продукта</label><br>
                <input type="number" name="price" id="price" value="{( $product->price )}" require><br>
                <label for="description">Описание продукта</label><br>
                <input name="description" id="description" require>{($product->description)}</textarea><br>
                <label for="category_id">Категория продукта</label><br>
                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                    @endforeach
                </select><br>
                <input type="submit" value="Обновить">
            </form>
        </div>
    </main>
</body>

</html>