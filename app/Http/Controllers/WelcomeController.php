<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\categories;
use App\Tags;
use App\post_tags;
use App\galeri;
use App\Daftar_iklan;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $iklan=Daftar_iklan::paginate(1);
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $category=categories::all();
        $tags=Tags::all();
        $lifestyle=Post::where('published_at','<=',now())->orderBy('id','desc')->paginate(1);
        $post=Post::orderBy('id','asc')->paginate(4);
        $khusus=Post::join('categories','posts.categories_id','=','categories.id')
                    ->select('posts.*','categories.name')
                    ->where('categories.name','LIKE','khusus')
                    ->orderBy('posts.id','asc')
                    ->limit(1)
                    ->get();
        return view('pembaca.beranda')->with('category',$category)
            ->with('tags',$tags)
            ->with('all',Post::searched()->orderBy('id','desc')->paginate(4))->with('pict',$pict)->with('post',$post)
            ->with('khusus',$khusus)
            ->with('life',$lifestyle)
            ->with('iklan',$iklan);
        }
    
    public function galeri()
    {
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $category=categories::all();
        $tags=Tags::all();
        
        return view('pembaca.galeri')->with('category',$category)
            ->with('tags',$tags)->with('galeri',galeri::PostIt()->get())->with('pict',$pict);;

    }
    public function single($id){
        $pict=galeri::orderBy('id','desc')->paginate(1);
        $tag=DB::table('tags')
        ->join('post_tags', 'tags.id', '=', 'post_tags.tags_id')
        ->select('tags.name')
        ->get();
        $post=Post::find($id);
        $category=categories::all();
        return view('pembaca.post')->with('post',$post)->with('tags',$tag)->with('pict',$pict)->with('category',$category);
    }
    public function category($id)
    {
        
        $categories=categories::find($id);
        $category=categories::all();
        $tags=Tags::all();
        return view('pembaca.categories',[
            'category'=>$category,
            'tags'=>$tags,
            'all'=>$categories->posts()->searched()->paginate(4),
        ]);
        
        //->with('category',$category)->with('tags',$tags)->with('all',$categories->posts()->searched()->paginate(4))->with('pict',$pict);;
    }

    public function tag($id)
    {
        $categories=categories::all();
        $tags=Tags::all();
        $tag=Tags::find($id);
        return view('pembaca.tags',[
            'category'=>$categories,
            'tags'=>$tags,
            'all'=>$tag->posts()->searched()->paginate(6),
            ]);
           
    }
    public function contact()
    {
        $categories=categories::all();
        $tags=Tags::all();
        return view('pembaca.contactus',['tags'=>$tags,
        'category'=>$categories
        ]);
    }
    public function search()
    {
        $category=categories::all();
        $tag=Tags::all();
  
        return view('pembaca.search')
        ->with('all',Post::searched()->orderBy('id','desc')->paginate(4))
        ->with('tags',$tag)
        ->with('category',$category);
    }
    public function about()
    {
        $categories=categories::all();
        $tags=Tags::all();
        return view('pembaca.about',['tags'=>$tags,
        'category'=>$categories
        ]);
    }
    
    
}
