<x-layout :title="$title">
  <section class="hero">
    <div class="container">
      <div class="row">
        @include('_sidebar')
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <input type="text" placeholder="Cari Voucher tersedia">
                <button type="submit" class="site-btn">Cari</button>
              </form>
            </div>
          </div>
          <!-- Featured Section Begin -->
          <section class="featured">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  @foreach($allCart as $cart)
                  <div class="featured__item">
                    <div class="featured__item__pics">
                      <img class="gambarjerukbali" src="/img/featured/{{$cart->produk->foto}}" style="width:150px;height:148px;" align="left" bgcolor="white">
                      <br>
                      <p8><class="text heading">&nbsp&nbsp&nbsp {{$cart->produk->nama}}<p8>
                      <br/>
                      <p4><class="text heading">&nbsp&nbsp&nbsp&nbsp&nbsp Totalnya adalah Rp {{ number_format($cart->produk->harga * $cart->qty, 0, '','.') }} sesuai beratnya<p4>
                      <br/>
                      <p7>&nbsp&nbsp&nbsp&nbsp Rp {{ number_format($cart->produk->harga, 0, '','.') }}/Kg</p7>
                      <a href="remove-cart/{{ $cart->id }}" class="ite-btn-hapus">HAPUS</a>
                      <div class="qty-container">
                        <a href="qty-min/{{ $cart->id }}"><span class="minus"><span></span></span></a>
                        <span class="num">{{ $cart->qty }}</span>
                        <a href="qty-plus/{{ $cart->id }}"><span class="plus"><span></span><span></span></span></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="col-lg-12">
                  <div class="hero__search">
                    <div class="hero__search__formm">
                        <p6><class="text heading">Kode Voucher</p6>
                        <br/>
                        <div class="hero__search">
                          <form action="add-voucher/{{$payment->id}}" method="post">
                            @csrf
                            <div class="form-group form-primary"> 
                              <input type="text" class="form-control" name="kode" value="{{ ($payment->voucher_id) ? $payment->voucher->code_voucher : ''}}" placeholder="Masukan kode disini" id="Kode">
                              <button type="submit" class="btn btn-primary">Add Voucher</button>
                            </div> 
                          </form>
                          <form action="#">
                            <h6 class="alignleft">Subtotal</h6>
                            <h6 class="alignright">Rp {{ number_format($payment->total_price, 0, '','.') }}</h6><br />
                            <h6 class="alignleft">Kupon</h6>
                            <h6 class="alignright">Rp {{ number_format($payment->total_discount, 0, '','.') }}</h6><br />
                            <hr />
                            <h6 class="alignleft">Total</h6>
                            <h6 class="alignright">Rp {{ number_format($payment->total_price - $payment->total_discount, 0, '','.') }}</h6>
                          </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="hero__search">
                      <div class="hero__search__furmm">
                        <form action="add-payment/{{ $payment->id }}" method="post">
                          @csrf
                          <div class="col-md-12">
                            <p6><class="text heading">Pilih Metode Pembayaran</p6>
                            <br/>
                            <hr/>
                            <div class="hero__search">
                              <label for="virtualaccount">
                                <div class="hero__search__vm">
                                  <ul>
                                    <center><img class="gambarva" src="/img/Virtual_Acc.png"></center>
                                    {{-- <center><a href="#">Virtual Account</a></center> --}}
                                    <center><h5>Virtual Account</h5></center>
                                  </ul>
                                </div>
                                <center>
                                  <input type="radio" name="method" value="Virtual Account" id="virtualaccount">
                                </center>
                              </label>
                              <label for="transferbank">
                                <div class="hero__search__tb">
                                  <ul>
                                    <center><img class="gambartb" src="/img/Transfer_Bank.png"></center>
                                    {{-- <center><a href="#">Transfer Bank</a></center> --}}
                                    <center><h5>Transfer Bank</h5></center>
                                  </ul>
                                </div>
                                <center><input type="radio" name="method" value="Transfer Bank" id="transferbank"></center>
                              </label>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="sites-btn">Checkout</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</x-layout>
