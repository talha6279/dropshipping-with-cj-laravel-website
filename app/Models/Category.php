<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = [
        'cj_category_id',
        'name_en',
        'name_zh',
        'icon_url'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}