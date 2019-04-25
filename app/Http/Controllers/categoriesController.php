<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;

use App\Http\Requests\CreateCategoryRequest;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $categories=categories::all();
        return view('categories.index',
        [
            'category'=>$categories
            
            ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(CreateCategoryRequest $request)
    {
        
       
        $data=request()->all();

        $createCategories= new categories();
        
        $createCategories->name=$data['name'];

        $createCategories->save();

        Session()->flash('completed','Categories Added');

        return redirect('categories');

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
    public function edit(categories $category)
    {
        return view('categories.create',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, $id)
    {
        $categories=categories::find($id);
        $categories->name=request()->name;

        $categories->save();

        session()->flash('success','Edit Successfully');

        return redirect('categories');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= categories::find($id);
$post->delete();
        session()->flash('completed','deleted success');

        return redirect('categories');
    }
}
