<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::with('categories')->get();
    }

    /**
     * Send list of category of parent to add product page
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Category::doesntHave('parent')->get();
    }


}
