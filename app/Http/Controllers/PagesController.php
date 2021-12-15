<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{

  public function show(Request $request, Post $post)
 {
   dd($request);

     return view('home', ['post' => $post]);
 }

}
