<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\categories;
use App\Tags;
use App\post_tags;
use App\galeri;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {

        $pict=galeri::orderBy('id','desc')->paginate(1);
        $category=categories::all();
        $tags=Tags::all();
        $lifestyle=Post::where('published_at','<=',now())->orderBy('id','desc')->paginate(1);
        $post=Post::orderBy('id','asc')->paginate(6);
        $khusus=Post::join('categories','posts.categories_id','=','categories.id')
                    ->select('posts.*','categories.name')
                    ->where('categories.name','LIKE','khusus')
                    ->orderBy('posts.id','asc')
                    ->paginate(1);
        return view('pembaca.beranda')->with('category',$category)
            ->with('tags',$tags)
            ->with('all',Post::searched()->orderBy('id','desc')->paginate(4))->with('pict',$pict)->with('post',$post)
            ->with('khusus',$khusus)
            ->with('life',$lifestyle);
        }
    
    public function galeri()
    {
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $category=categories::all();
        $tags=Tags::all();
        
        return view('pembaca.galeri')->with('category',$category)
            ->with('tags',$tags)->with('galeri',galeri::PostIt()->paginate(4))->with('pict',$pict);;

    }
    public function single($id){
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $tag=DB::table('tags')
        ->join('post_tags', 'tags.id', '=', 'post_tags.tags_id')
        ->select('tags.name')
        ->get();
        $post=Post::find($id);
        return view('pembaca.post')->with('post',$post)->with('tags',$tag)->with('pict',$pict);;
    }
    public function category($id)
    {
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $categories=categories::find($id);
        $category=categories::all();
        $tags=Tags::all();
        return view('pembaca.category')->with('category',$category)->with('tags',$tags)->with('all',$categories->posts()->searched()->paginate(4))->with('pict',$pict);;
    }

    public function tag($id)
    {
        $categories=categories::all();
        $tags=Tags::all();
        $tag=Tags::find($id);
        $pict=galeri::orderBy('id','desc')->paginate(1);
        return view('pembaca.tag')->with('category',$categories)->with('tags',$tags)->with('all',$tag->posts()->searched()->paginate(4))->with('pict',$pict);
    }
    public function contact()
    {
        return view('pembaca.contact');
    }
    
    
}
