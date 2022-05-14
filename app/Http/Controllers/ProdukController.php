<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Wishlist;
use App\Models\Payment;
use App\Models\Voucher;
use App\Models\Cart;
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
        $allCart = Cart::where('user_id', Auth::user()->id)->get();
        $checkCart = Cart::where('user_id', Auth::user()->id)->first();
        $paymentCheck = Payment::where('user_id', Auth::user()->id)->where('status', false)->first();
        $payment = null;
        if(empty($paymentCheck)) {
            $newPayment = new Payment;
            $newPayment->status = false;
            $newPayment->total_price = 0;
            $newPayment->user_id = Auth::user()->id;
            $newPayment->save();
            $payment = $newPayment; 
        } else {
            $payment = $paymentCheck;
        }
        if($checkCart == null) {
            $payment->total_price = 0;
        } else {
            $payment->total_price = 0;
            foreach($allCart as $ac) {
                $payment->total_price += $ac->produk->harga * $ac->qty;
            }
            $payment->save();
        }
        return view('cart', [
            'title' => 'cart',
            'allCart' => $allCart,
            'payment' => $payment
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

    public function addCart($id)
    {
        $checkCart = Cart::where('produks_id', $id)->first();
        if(empty($checkCart)) {
            $checkCart = new Cart();
            $checkCart->produks_id    = $id;
            $checkCart->user_id       = Auth::user()->id;
            $checkCart->save();
        } else {
            $checkCart->delete();
        }
        
        return redirect('/imperfect/home');
    }

    public function removeCart($id)
    {
        $checkCart = Cart::find($id)->delete();
        
        return redirect('/imperfect/cart');
    }

    public function decreaseQuantity($id)
    {
        $checkCart = Cart::find($id);
        if($checkCart->qty == 1) {
            $checkCart->delete(); 
        } else {
            $checkCart->qty -= 1;
            $checkCart->save();
        }
        return redirect('/imperfect/cart');
    }

    public function increaseQuantity($id)
    {
        $checkCart = Cart::find($id);
        $checkCart->qty += 1;
        $checkCart->save();
        
        return redirect('/imperfect/cart');
    }

    public function addVoucher(Request $req, $id)
    {
        $checkVoucher = Voucher::where('code_voucher', $req->kode)->first();

        if(!empty($checkVoucher)) {
            $checkPayment = Payment::find($id);
            if($checkPayment->total_price >= $checkVoucher->min_discount) {
                $checkPayment->voucher_id = $checkVoucher->id;
                $discount = $checkPayment->total_price - ($checkPayment->total_price * $checkVoucher->percentage / 100);
                $checkPayment->total_discount = ($discount >= $checkVoucher->max_discount) ?  10000 : $discount;
                $checkPayment->save(); 
            }
        }

        return redirect('/imperfect/cart');
    }

    public function addPayment(Request $req, $id)
    {
        $checkPayment = Payment::find($id);
        $checkPayment->payment_method = $req->method;
        $checkPayment->status = true;
        $checkPayment->save();
        
        $allCart = Cart::where('user_id', Auth::user()->id)->get();
        foreach($allCart as $ac) {
            $ac->delete();
        }
        return redirect('/imperfect');
    }

    public function review(){
        return view('review', [
            'title' => 'review'
        ]);
    }
}
