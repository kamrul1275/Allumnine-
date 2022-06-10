<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexView()
   {
      return 'hello i am table';
   }




   public function CreatePost()
   {
      return view('admin.table');
   }
}
