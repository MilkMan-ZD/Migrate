<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список товаров</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Интернет магазин</h1>
    </header>
    <main>
        <div class="container mx-auto">
            <h2>Каталог товаров</h2>
            <div>
                @foreach ($products as $product)
                    <div class="border mb-4 flex">
                         <img class="w-50 h-full aspect-1 mr-4git" src="{{ Vite::asset($product->path_img) }}" alt="{{$product->title}}">
                        <div>
                            <h3>{{$product->title}}</h3>
                            <p>{{$product->description}}</p>
                            <p>{{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>