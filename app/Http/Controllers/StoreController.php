<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        return view('store.top');
    }

    public function login(Request $request){
        $mail = $request -> email;
        $password = $request -> password;
        $item = Store::where('mail', $mail) -> first();

        $judge = Hash::check($password,$item['password']);

        if($judge)
        {
             $request -> session() -> put('store_id',$item['store_id']);
             return view('store.login_top');
        } 
        else
        {
            return view('store.login_top');
        }
  }
}