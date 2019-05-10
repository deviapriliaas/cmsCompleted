<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use App\Post;
use App\Http\Requests\Tags\CreateTagsRequest;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $tag=Tags::paginate(5);
        return view('tags.index',['tags'=>$tag]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(CreateTagsRequest $request)
    {
        
       
        $data=request()->all();

        $createTags= new Tags();
        
        $createTags->name=$data['name'];

        $createTags->save();

        Session()->flash('completed','Tags Added');

        return redirect('Tags');

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
    public function edit(Tags $category)
    {
        return view('tags.create',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTagsRequest $request, $id)
    {
        $tag=Tags::find($id);
        $tag->name=request()->name;

        $tag->save();

        session()->flash('success','Edit Successfully');

        return redirect('Tags');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tagsDelete= Tags::find($id);
        if($tagsDelete->posts->count() > 0)
            {
                session()->flash('error','tags still have a post you cannot delete'); 
                return redirect()->back();
            }
        $tagsDelete->delete();
        session()->flash('completed','deleted success');

        return redirect('Tags');
    }
}
