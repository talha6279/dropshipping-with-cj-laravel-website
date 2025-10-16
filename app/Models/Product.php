<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
        'videos' => 'array'
    ];

    protected $fillable = [
        'cj_pid',
        'category_id',
        'name_en',
        'name_zh',
        'description_en',
        'description_zh',
        'price',
        'stock',
        'images',
        'videos',
        'weight',
        'package_size',
        'is_hot',
        'cj_synced_at'
    ];

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function certifications()
    {
        return $this->hasMany(ProductCertification::class);
    }
}