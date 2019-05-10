<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\Http\Requests\galeri\VerifyGaleri;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris=galeri::paginate(6);
        return view('galeri.index')->with('galeris',$galeris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VerifyGaleri $request)
    {
        $addGaleri= new galeri();

        $data=$request->all();

        $image=$request->pictgambar->store('image');

        $addGaleri->title=$data['title'];
        $addGaleri->pictgambar=$image;

        $addGaleri->save();

        session()->flash('completed','Success Add Picture');

        return redirect('galeri');
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
    public function edit(galeri $galeri)
    {
        return view('galeri.create')->with('galeri',$galeri);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $addGaleri= galeri::find($id);

        
        $data=$request->all();

        $imageAsk=$request->pictgambar;
        if($imageAsk==null){
            $addGaleri->title=$data['title'];
        }
        else{
            $image=$request->pictgambar->store('image');
            $addGaleri->title=$data['title'];
            $addGaleri->pictgambar=$image;
        }

        $addGaleri->save();

        session()->flash('completed','Success Edited Picture');

        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=galeri::find($id);

        $delete->delete();

        session()->flash('completed','delete picture successfully');

        return redirect('galeri');
    }
}
