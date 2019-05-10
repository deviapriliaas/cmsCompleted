<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\tags;

class frontController extends Controller
{
    public function ourcategory($id)
    {
        $category=categories::all();
        $tag=Tags::all();
  

        return view('layouts.front',['category'=>$category,'tags'=>$tag]);
    }
}
