<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all(); // выбираем все строки и записи из таблицы products
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request,  Product $product){
        $data = $request->validate([
            'title'=>'string',
            'price'=> 'decimal:0,2|max:1000000|min:0|required',
            'description' => 'string|required'
        ]); //валидация
        $product->create($data); // создаем новый запись в БД
        return redirect()->back();
    }
}
