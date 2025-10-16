<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'product_id',
    ];
    protected $primaryKey = "cart_id";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
