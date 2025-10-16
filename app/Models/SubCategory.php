<?php

namespace App\Models;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'picture',
        'category_id',
    ];
    protected $primaryKey = "subcategory_id";

    public function products()
{
    return $this->hasMany(ProductModel::class, 'subcategory_id');  // Adjust 'category_id' if necessary
}

    public function category()
{
    return $this->belongsTo(CategoryModel::class, 'category_id');
}
}
