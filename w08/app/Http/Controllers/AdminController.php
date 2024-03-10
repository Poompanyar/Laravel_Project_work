<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    //ดึงข้อมูลมา show
    function brand() {
        $brand = DB::table('brands')->get();
        return view('brand.brand', compact('brand'));
    }

    function category() {
        $categories = DB::table('categories')->get();
        return view('category.category', compact('categories'));
    }

    function customer() {
        $customer = DB::table('customers')->get();
        return view('customer.customer', compact('customer'));
    }

    function promotion() {
        $promotion = DB::table('promotions')->get();
        return view('promotion.promotion', compact('promotion'));
    }




    //delete data
    function deleteBrand($id) {
        DB::table('brands')->where('id',$id)->delete();
        return redirect('/brand');
    }

    function deleteCategory($id) {
        DB::table('categories')->where('id',$id)->delete();
        return redirect('/category');
    }

    function deleteCustomer($id) {
        DB::table('customers')->where('id',$id)->delete();
        return redirect('/customer');
    }

    function deletePromotion($id) {
        DB::table('promotions')->where('id',$id)->delete();
        return redirect('/promotion');
    }


    //edit data
    function editBrand($id){
        $editBrand = DB::table('brands')->where('id',$id)->first();
        return view('brand.edit-brand', compact('editBrand'));
    }

    function editCategory($id){
        $editCategory = DB::table('categories')->where('id',$id)->first();
        return view('category.edit-category', compact('editCategory'));
    }

    function editCustomer($id){
        $editCustomer = DB::table('customers')->where('id',$id)->first();
        return view('customer.edit-customer', compact('editCustomer'));
    }

    function editPromotion($id) {
        $editPromotion = DB::table('promotions')->where('id',$id)->first();
        return view('promotion.edit-promotion', compact('editPromotion'));
    }



    //create data
    function createBrand(){
        return view('form');
    }

    //insert data
    function insert(Request $request){
        $request->validate([
            'brand_name'=>'required',
        ]);
        $data = [
            'brand_name'=>$request->brand_name,
        ];
        DB::table('brands')->insert($data);
        return redirect('/brand');
    }

    function insert2(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $data = [
            'category_name'=>$request->category_name
        ];
        DB::table('categories')->insert($data);
        return redirect('/category');
    }

    function insert3(Request $request){
        $request->validate([
            'customer_name'=>'required',
            'email'=>'required',
            'phone_no' => [
                'required',
                'numeric',
                'digits:10',
            ],
            'address'=>'required',
            'password'=>'required'
        ]);
        $data = [
            'customer_name'=>$request->customer_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'password'=>$request->password
        ];
        DB::table('customers')->insert($data);
        return redirect('/customer');
    }

    function insert4(Request $request){
        $request->validate([
            'promotion_name'=>'required',
            'p_start'=>'required',
            'p_end'=>'required',
            'percent_discount'=>'required'
        ]);
        $data = [
            'promotion_name'=>$request->promotion_name,
            'p_start'=>$request->p_start,
            'p_end'=>$request->p_end,
            'percent_discount'=>$request->percent_discount
        ];
        DB::table('promotions')->insert($data);
        return redirect('/promotion');
    }



    //update data
    function update(Request $request,$id){
        $request->validate([
            'brand_name'=>'required',
        ]);
        $data = [
            'brand_name'=>$request->brand_name,
        ];
        DB::table('brands')->where('id',$id)->update($data);
        return redirect('/brand');
    }

    function updateCategory(Request $request,$id){
        $request->validate([
            'category_name'=>'required',
        ]);
        $data = [
            'category_name'=>$request->category_name,
        ];
        DB::table('categories')->where('id',$id)->update($data);
        return redirect('/category');
    }

    function updateCustomer(Request $request,$id){
        $request->validate([
            'customer_name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'password'=>'required',
        ]);
        $data = [
            'customer_name'=>$request->customer_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'password'=>$request->password,
        ];
        DB::table('customers')->where('id',$id)->update($data);
        return redirect('/customer');
    }

    function updatePromotion(Request $request,$id){
        $request->validate([
            'promotion_name'=>'required',
            'p_start'=>'required',
            'p_end'=>'required',
            'percent_discount'=>'required',
        ]);
        $data = [
            'promotion_name'=>$request->promotion_name,
            'p_start'=>$request->p_start,
            'p_end'=>$request->p_end,
            'percent_discount'=>$request->percent_discount,
        ];
        DB::table('promotions')->where('id',$id)->update($data);
        return redirect('/promotion');
    }

    
}
