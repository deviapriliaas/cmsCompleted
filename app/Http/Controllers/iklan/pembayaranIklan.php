<?php

namespace App\Http\Controllers\iklan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pembayaran_iklan;
use App\User;
use App\Daftar_iklan;
class pembayaranIklan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan=auth()->user()->id;
        $daftarIklan=User::join('daftar__iklans','users.id','=','daftar__iklans.user_id')
        ->select('daftar__iklans.*')
        ->where(['daftar__iklans.user_id'=>$iklan])->get();
                return view('iklan.metode-pembayaran',[
                    'iklan'=>$daftarIklan,
                    
                ]);
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
        $addPembayaran=new Pembayaran_iklan();
       
        $addPembayaran->no_bukti_ref=$request->no_bukti_ref;
        $addPembayaran->iklan_id=$request->iklan_id;
        $addPembayaran->status='belum verifikasi';
        

        $addPembayaran->save();
        
        session()->flash('completed','Your Request Iklan added');

        return redirect('iklan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }
    public function datapembayaran()
    {
        $iklan=auth()->user()->id;
        $daftarIklan=User::join('daftar__iklans','users.id','=','daftar__iklans.user_id')
        ->join('pembayaran_iklan','daftar__iklans.id_iklan','=','pembayaran_iklan.iklan_id')
        ->select('daftar__iklans.*','pembayaran_iklan.*')
        ->where(['daftar__iklans.user_id'=>$iklan])->get();
                return view('iklan.list-pembayaran',[
                    'iklan'=>$daftarIklan,
                    
                ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_iklan)
    {

        $iklanId=Daftar_iklan::find($id_iklan);
        return view('iklan.pembayaran')->with('iklanId',$iklanId);
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
