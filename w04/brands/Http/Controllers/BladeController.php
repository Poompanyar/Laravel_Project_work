<?php

namespace App\Http\Controllers;
use App\Models\Brands;


class BladeController extends Controller
{
    public function index(){
        $brands = Brands::orderBy('id')->paginate(4);
        return view('brand.index', ['brands' => $brands]);
    }
}
