<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(8);
        $title  = 'homepage';
        return view('home')->with(compact('produk', 'title'));
    }
}
