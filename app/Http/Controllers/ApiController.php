<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allPublishedCategory(){
        $categories = Category::all();
        return $categories;
    }
}
