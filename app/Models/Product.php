<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $fillable = ['title', 'price', 'description', 'category_id', 'path_img']; //всё что разрешено
    //public $guarded = []; - всё что запрещено

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
