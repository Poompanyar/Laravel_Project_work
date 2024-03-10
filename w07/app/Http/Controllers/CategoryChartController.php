<?php

namespace App\Http\Controllers;
use App\Models\Categorise;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoryChartController extends Controller
{
    public function index(){
        $category_count = DB::table('categorises')
            ->join('products', 'categorises.id', '=', 'products.categorises_id')
            ->select(DB::raw('count(*) as category_count, categorises.category_name, products.categorises_id'))
            ->groupBy('categorises.category_name', 'products.categorises_id')
            ->pluck('category_count', 'categorises.category_name');

            $labels = $category_count->keys();
            $data = $category_count->values();

            return view('category-chart', compact('labels', 'data'));
    
    }

    public function index2(){
        $category_count = DB::table('categorises')
            ->join('customers', 'categorises.id', '=', 'customers.customers_id')
            ->select(DB::raw('count(*) as category_count, categorises.category_name, customers.customers_id'))
            ->groupBy('categorises.category_name', 'customers.customers_id')
            ->pluck('category_count', 'categorises.category_name');

            $labels = $category_count->keys();
            $data = $category_count->values();

            return view('customer-chart', compact('labels', 'data'));
    }
}
