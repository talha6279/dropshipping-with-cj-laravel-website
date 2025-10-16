<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CheckoutModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'first_name',
        'last_name',
        'country',
        'address',
        'city',
        'postal_code',
        'phone',
        'email',
        'order_note',
        'product_id',
    ];
    protected $primaryKey = "order_id";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
