<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function redirect()
{
   if(Auth::id()){
       if(auth::user()->usertype==0){

        return view('user.dashboard');
       }

       else{

        return view('admin.dashboard');
       }
   }

   else {

    return redirect()->back();
   }

}




public function Index()
{
   return view('user.home');
}



}
