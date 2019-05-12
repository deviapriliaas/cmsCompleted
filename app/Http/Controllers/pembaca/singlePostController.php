<?php

namespace App\Http\Controllers\pembaca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\categories;
use App\Tags;
use App\post_tags;
use App\galeri;
use Illuminate\Support\Facades\DB;


class singlePostController extends Controller
{
    public function layout()
    {
        $tags=Tags::all();
            $category=categories::all();

            return view('layouts.single-post',[
            
                'tags'=>$tags,
                'category'=>$category
                ]);      
    }
        public function singlePost($id)
        {
            $singlePost=Post::find($id);
            $tags=Tags::all();
            $category=categories::all();

            return view('pembaca.detail-post',[
                'single'=>$singlePost,
                'tags'=>$tags,
                'category'=>$category
                ]);      
        }
        public function sidebar()
        {
            $singlePost=Post::find($id);
            $tags=Tags::all();
            $category=categories::all();

            return view('layouts.single-post',[
                'tags'=>$tags,
                'category'=>$category
                
                ]);
        }

}
