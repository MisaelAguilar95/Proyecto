<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
     public function index(){
        $posts = ['Laravel intermedio', 'Laravel avanzado'];
        return view('vista',compact('posts'));
     }
     public function vista(){
      $results = DB::select('select * from users where id = :id', ['id' => 1]);
        return ($results);
     }
}
