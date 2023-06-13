<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{

    public function showDashboard(){
        $barang = Barang::all();
        return view('Dashboard.view', ['barangs' => $barang]);
    }

    public function showHomePage(){
        $barang = Barang::all();
        return view('home', ['barang' => $barang]);
    }

    public function showCatalogPage(Request $request){

        $barang = Barang::all();

        if($request->has('search')){
            $barang->where('nama', 'LIKE', '%'.$request->search.'%');
        }
        // $barang = $barang->paginate(10);
        return view('catalog', compact('barang'));
    }




    public function store(Request $request){
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
        return redirect('/create-product');
    }


    public function showItemByID(Barang $id){
        $barang = Barang::find($id);
        return view('detailPage', ['barang' => $barang]);
    }


    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

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

        // $barang = new Barang();
        // $barang->nama = $request->nama;
        // $barang->harga = $request->harga;
        // $barang->jumlah = $request->jumlah;
        $barang->foto = $image;
        $barang->update($request->all());
        return redirect('/dashboard');
    }

    public function getBarangById($id) {
        $barang = Barang::find($id);
        return view('Dashboard.updateProduct', ['barang' => $barang]);
    }



    public function destroy(Barang $id)
    {
        $barang = Barang::find($id);
        Barang::destroy($barang);
        return redirect('/dashboard');
    }
}
