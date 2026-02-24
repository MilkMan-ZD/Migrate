<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['title','price','description', 'category_id', 'path_img']; //всё что разрешено
    //public $guarded = []; - всё что запрещено
}
