<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // Mass Assignment 
    protected $guarded = [
        'id',
        'category_id',
        'created_at',
        'updated_at'
    ];

    // Relation Many to one (Category)
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
}
