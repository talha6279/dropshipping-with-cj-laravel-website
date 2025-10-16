<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'picture',
    ];
    protected $primaryKey = "category_id";
    public function subcategory()
{
    return $this->hasMany(SubCategory::class, 'category_id');  // Adjust 'category_id' if necessary
}


}
