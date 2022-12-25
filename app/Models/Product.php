<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['category_id', 'name', 'description_small', 'description', 'price', 'stars', 'count', 'status',	'picture'];
}
