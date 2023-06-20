<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    //
    function show(){
        $data['produks'] = Produk::all();
        return view('home',$data);

    }
    function hmproduk(){
        $data['produks'] = Produk::all();
        return view('hmproduk',$data);

    }
    function card($id){
        $data['produks'] = Produk::find($id);
        // $data['produks'] = Produk::first();
        return view('card',$data);
    }

    function cari(Request $req){

        $data['produks'] = Produk::where('kdproduk','like',$req->cari. "%")
        ->orwhere('namaproduk','like',$req->cari. "%")
        ->orwhere('jenisproduk','like',$req->cari. "%")
        ->orwhere('merk','like',$req->cari. "%")
        ->paginate();

        $data['cari'] = $req->cari;
        return view('hmproduk',$data);
      }
}
