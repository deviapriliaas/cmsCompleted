<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tags;
use App\categories;
use App\Http\Requests\Post\postrequest;
use Illuminate\Support\Facades\Storage;


class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::paginate(5);
        return view('posts.index',['all'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',categories::all())->with('tags',Tags::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postrequest $request)
    {
        
        $post= new Post();

        $data=$request->all();

        $gambar=$request->image->store('image');
        
  
        $post->title=$data['title'];

        $post->description=$data['description'];

        $post->content=$data['content'];
        $post->categories_id=$data['categories_id'];
        $post->published_at=$data['published_at'];
        $post->image=$gambar;

        

        $post->save();
        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        session()->flash('completed','Create Post Successfully');

        return redirect(route('post.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       
       return view('posts.create')->with('post',$post)->with('categories',categories::all())->with('tags',Tags::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(postrequest $request,$id)
    {
        $editPost= Post::find($id);
        
       if($request->image== null)
       {
           
            $editPost->title=$request->title;
            $editPost->description=$request->description;
            $editPost->content=$request->content;
            $editPost->published_at=$request->published_at;
            $editPost->categories_id=$request->categories_id;
       }
       else{
              $gambar=$request->image->store('image');
            
            $editPost->title=$request->title;
            $editPost->description=$request->description;
            $editPost->content=$request->content;
            $editPost->published_at=$request->published_at;
            $editPost->categories_id=$request->categories_id;
            Storage::delete($editPost->image);
            $editPost->image=$gambar;
            

            
           
       }
       if($request->tags)
       {
           $editPost->tags()->sync($request->tags);
       }
       $editPost->save();
      
       session()->flash('completed','Edited Successfully');
       return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        
    $post=Post::withTrashed()->where('id',$id)->FirstOrFail();
        if($post->trashed())
        {
           $post->deleteImage();
           $post->forceDelete();

            session()->flash('completed','Deleted Successfully');
            return redirect('trashed-post');
        }
        else{
        $post->delete();
        session()->flash('completed','Trashed Successfully');
        return redirect(route('post.index'));
        }

        

        
    }
     /**
     * This is for trash a post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trash=Post::onlyTrashed()->paginate(4);
        return view('posts.index')->with('all',$trash);
    }
    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();
            session()->flash('completed','Restored Successfully');
             return redirect('trashed-post');


    }


}
