<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungController extends Controller
{
    public function saveuser(Request $request){
        //validate data
        //email
        $request->validate([
            'email'=>'required|min:6|max:255',
            'password'=>'required|min:6|max:25',
            'name'=>'required|min:6|max:255',
        ]);
        // dd($request->all());
        //validate request

        //Save to database
        $check = DB::insert('INSERT INTO user (name,email,password)
        VALUES (?,?,?)', [$request->name,$request->email,Hash::make($request->password)]);

        return redirect()->route('home')
        ->with('message','Sign Up Success');
    }
    public function loginuser(Request $request){
        dd($request->all());
    }
}
