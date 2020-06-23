<?php

namespace App\Http\Controllers;

use App\Konsumen;
use Illuminate\Http\Request;

class Controllerkonsumen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Konsumen::all();
       return view('konsumen.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Konsumen();
        $data->nama_konsumen=$request->nama_konsumen;
        $data->jenis_kendaraan=$request->jenis_kendaraan;
        $data->no_polisi=$request->no_polisi;
        $data->tanggal_lahir=$request->tanggal_lahir;
        $data->tanggal_lahir=$request->tanggal_lahir;
        $data->jenis_kelamin=$request->jenis_kelamin;
        $data->no_hp=$request->no_hp;
        $data->save();

        return redirect('konsumen')->with('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konsumen=Konsumen::findOrFail($id);
        return view('konsumen.edit',compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Konsumen::findOrFail($id);
     
        $data=$request->all();
        $post->update($data);
        return redirect('konsumen')->with('content berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Konsumen::findOrFail($id);
        $data->delete();
        return redirect('konsumen')->with('content berhasil di edit');
    }
}
