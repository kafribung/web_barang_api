<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Backend\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke()
    {
        $categorie = Category::orderBy('id', 'desc')->get();
        return CategoryResource::collection($categorie);
    }
}
