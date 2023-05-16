<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showHomePage(){
        $barang = Barang::all();
        return view('home', ['barang' => $barang]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        // if($request->file('foto')){
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $fileName = $request->nama.'.'.$extension;//rename image
        //     $validasi['foto'] = $request->file('foto')->storeAs('public/image', $fileName);
        //     // dd($fileName);
        // }
        // Barang::create($validasi);
        // return redirect('/dashboard');

        $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'foto' => 'required|image'
        ];

        $validator = FacadesValidator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $filename);
        $image = 'images/'.$filename;

        $barang = new Barang();
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        $barang->foto = $image;
        $barang->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
