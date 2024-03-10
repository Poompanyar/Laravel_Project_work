<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function category(){
        $datacategory=DB::table('categorises')->get();
        return view('categorises', compact('datacategory'));
    }


    function production(){
        $dataproduct=DB::table('products')->get();
        return view('product', compact('dataproduct'));
    }


    function customer(){
        $datacustomer=DB::table('customers')->get();
        return view('customer', compact('datacustomer'));
    }



    function insertcategory(Request $request){
        $request -> validate([
            'category_name'=> 'required|max:50',
        ]);
        
        $data1 = [
            'category_name'=>$request->category_name,
        ];
        DB::table('categorises')->insert($data1);
        return redirect('/formdata');
    }



    function insertproduct(Request $request){
        $request -> validate([
            'product_name'=>'required|max:50',
            'product_desc'=>'required',
            'product_image'=>'',
        ]);
        // ** กรณีนี้เราไม่ต้องการให้ส่งค่า product_image ไป เราเลยไปกำหนดค่าในฐานข้อมูลให้เป็น NULL มันจึงสามารถส่งข้อมูลไปโดยไม่ผิดพลาดได้
        $data2 = [
            'product_name'=>$request->product_name,
            'product_desc'=>$request->product_desc,
        ];

        DB::table('products')->insert($data2);
        return redirect('/formdata');
    }


    function insertcustomer(Request $request){
        $request -> validate([
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'province'=>'required',
            'zipcode'=>'required',
            'location'=>'required',
            'password'=>'required',
        ]);
        $data3 = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'province'=>$request->province,
            'zipcode'=>$request->zipcode,
            'location'=>$request->location,
            'password'=>$request->password,
        ];
        DB::table('customers')->insert($data3);
        return redirect('/formdata');
    }



    //function ในการลบข้อมูล 

    function delete($id){  //$id เป็นการส่ง id มาด้วย
        DB::table('categorises')->where('id',$id)->delete(); //เป็นการดึงข้อมูลของบทความ และตรวจสอบเงื่อนไข where ตามข้อมูลที่ส่งมา
        DB::table('products')->where('id',$id)->delete(); 
        DB::table('customers')->where('id',$id)->delete(); 
        return redirect('/categorises'); //จะเป็นการ return หน้า view content กลับมาเหมื่อนเดิมทุกครั้ง หลังลบข้อมุล
    }
    // function delete1($id){  
    //     DB::table('products')->where('id',$id)->delete(); 
    //     return redirect('/product'); 
    // }
    // function delete2($id){  
    //     DB::table('customers')->where('id',$id)->delete(); 
    //     return redirect('/customer'); 
    // }



    //function ปก้ไขข้อมูล
    function edit($id){  
        $edit=DB::table('categorises')->where('id',$id)->first(); 
        // $edit=DB::table('products')->where('id',$id)->first();
        // $edit=DB::table('customers')->where('id',$id)->first();
        return view('edit', compact('edit'));
    }

    function editone($id){  
        $editone=DB::table('products')->where('id',$id)->first();
        return view('editone', compact('editone'));
    }

    function edittwo($id){  
        $edittwo=DB::table('customers')->where('id',$id)->first();
        return view('edittwo', compact('edittwo'));
    }

}
