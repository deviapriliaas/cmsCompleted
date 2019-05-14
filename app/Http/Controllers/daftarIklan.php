<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_iklan;
use App\User;
use App\Profile;

class daftarIklan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan=User::join('profiles','users.id','=','profiles.user_id')
                    ->select('users.*','profiles.*')->get();
        return view('daftar-iklan.list-akun-iklan')->with('iklan',$iklan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showList()
    {
        $iklan=Daftar_iklan::join('pembayaran_iklan','daftar__iklans.id_iklan','=','pembayaran_iklan.iklan_id')
        ->select('daftar__iklans.*','pembayaran_iklan.*')
        ->where('daftar__iklans.id_iklan','=','pembayaran_iklan.iklan_id')->get();
        $all=Daftar_iklan::all();
        return view('daftar-iklan.list-iklan')->with('iklan',$iklan)->with('all',$all);
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
