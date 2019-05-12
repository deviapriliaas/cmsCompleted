<?php

namespace App\Http\Controllers\iklan;
use App\Http\Controllers\Controller;
use App\Daftar_iklan;
use App\Profile;
use Auth;
use Illuminate\Http\Request;


class iklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan=Daftar_iklan::all();
       return view('iklan.index',[
           'iklan'=>$iklan
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iklan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $addIklan= new Daftar_iklan();
        $profile=auth()->user();
        $gambar=$request->gambar_iklan->store('iklan');
       
        $addIklan->profile_id=$profile->id;
        $addIklan->gambar_iklan=$gambar;
        $addIklan->published_at=$request->published_at;
        $addIklan->jenis_iklan=$request->jenis_iklan;
       

        $addIklan->save();

        session()->flash('completed','Your Request Iklan added');

        return redirect('iklan');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
