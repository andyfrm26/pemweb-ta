<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function indexHomepage()
    {
        $produk = Produk::paginate(8);
        $title  = 'homepage';
        return view('home')->with(compact('produk', 'title'));
    }

    public function indexCart()
    {
        return view('cart', [
            'title' => 'cart'
        ]);
    }

    public function indexWishlist()
    {
        $allWish = Wishlist::where('user_id', Auth::user()->id)->get();

        return view('wishlist', [
            'title' => 'wishlist',
            'allWish' => $allWish
        ]);
    }

    public function addWishlist($id)
    {
        $checkWish = Wishlist::where('produks_id', $id)->first();
        if(empty($checkWish)) {
            $newWish = new Wishlist();
            $newWish->produks_id    = $id;
            $newWish->user_id       = Auth::user()->id;
            $newWish->save();
        } else {
            $checkWish->delete();
        }


        return redirect('/imperfect/home');
    }
}
