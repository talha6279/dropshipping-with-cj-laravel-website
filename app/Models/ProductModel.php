<?php

namespace App\Models;

use App\Models\CartModel;
use App\Models\SubCategory;
use App\Models\CategoryModel;
use App\Models\CheckoutModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'itemname',
        'detail',
        'price',
        'sku',
        'stock_quantity',
        'ingredients',
        'warnings',
        'size',
        'fragrance',
        'skintype',
        'hairtype',
        'formulation',
        'is_featured',
        'is_new_arrival',
        'is_best_seller',
        'is_limited_edition',
        'benefits',
        'how_to_use',
        'discounted_price',
        'category_id',
        'subcategory_id',
        'description',
        'picture',
        'picture1',
        'picture2',
        'picture3',
        'color',
    ];
    protected $primaryKey = "product_id";
    public function category()
{
    return $this->belongsTo(CategoryModel::class, 'category_id');
}

    public function subcategory()
{
    return $this->belongsTo(SubCategory::class, 'subcategory_id');
}
public function reviews()
{
    return $this->hasMany(ReviewModel::class, 'product_id');
}
public function cart()
{
    return $this->hasMany(CartModel::class, 'product_id');
}
public function checkout()
{
    return $this->hasMany(CheckoutModel::class, 'product_id');
}

}
