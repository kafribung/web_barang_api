<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Timestamps
    public $timestamps = false;

    // Mass Assignment 
    protected $guarded = [
        'id',
    ];

    // Relation One to Many (Inventory)
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

}
