<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index(){
        $product_types = ProductType::orderBy('id')->paginate(4);
        return view('product_type.index', ['product_types' => $product_types]);
    }
}
