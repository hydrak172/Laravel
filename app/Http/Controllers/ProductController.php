<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //connect to DB 
        //get all record on table product
        //pass  varialbe into view 
        $arrayProduct= [
            ['id'=>2,'name'=>'Product A', 'price'=> 32000],
            ['id'=>4,'name'=>'Product B', 'price'=> 34000],
            ['id'=>6,'name'=>'Product C', 'price'=> 36000],
            ['id'=>8,'name'=>'Product D', 'price'=> 38000],
            ['id'=>10,'name'=>'Product E', 'price'=> 40000],
            ['id'=>10,'name'=>'<b>  Product F </b>', 'price'=> 999999]
        ];
        $test='test';
        //cach 1 
        return view('user.list_user_blade',
        ['arrayProduct'=>$arrayProduct,
        'test'=>'aaaa'
        ]);  
        //cach 2 
        // return view('user.list_user_blade')
        // ->with('arrayProduct',$arrayProduct)
        // ->with('test',$test);
        // cach 3 
        // return view('user.list_user_blade',compact('arrayProduct','test'));
    }
}
