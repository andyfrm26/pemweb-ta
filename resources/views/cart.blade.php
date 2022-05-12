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
                      <p8><class="text heading">&nbsp&nbsp&nbsp {{$cart->produk->nama}}<p8>
                      <br/>
                      <p4><class="text heading">&nbsp&nbsp&nbsp&nbsp&nbsp Totalnya adalah Rp 45.000 sesuai beratnya<p4>
                      <br/>
                      <p7>&nbsp&nbsp&nbsp&nbsp Rp {{ number_format($cart->produk->harga, 0, '','.') }}/Kg</p7>
                      <button type="submit" class="ite-btn-hapus">HAPUS</button>
                      <div class="qty-container">
                        <span class="minus"><span></span></span>
                        <span class="num">1</span>
                        <span class="plus"><span></span><span></span></span>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="col-lg-12">
                  <div class="hero__search">
                    <div class="hero__search__formm">
                      <form action="#">
                        <p6><class="text heading">Kode Voucher</p6>
                        <br/>
                        <div class="hero__search">
                          <form action="#">
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Kode" value="" placeholder="Masukan kode disini" id="Kode"></div>
                            <h6 class="alignleft">Subtotal</h6>
                            <h6 class="alignright">Rp135.000</h6><br />
                            <h6 class="alignleft">Kupon</h6>
                            <h6 class="alignright">Rp0</h6><br />
                            <hr />
                            <h6 class="alignleft">Total</h6>
                            <h6 class="alignright">Rp135.000</h6>
                          </form>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="hero__search">
                      <div class="hero__search__furmm">
                        <form action="#">
                          <div class="col-md-12">
                            <p6><class="text heading">Pilih Metode Pembayaran</p6>
                            <br/>
                            <hr/>
                            <div class="hero__search">
                              <label for="virtualaccount">
                                <div class="hero__search__vm">
                                  <ul>
                                    <center><img class="gambarva" src="/img/Virtual_Acc.png"></center>
                                    <center><a href="#">Virtual Account</a></center>
                                  </ul>
                                </div>
                              </label>
                              <label for="transferbank">
                                <div class="hero__search__tb">
                                  <ul>
                                    <center><img class="gambartb" src="/img/Transfer_Bank.png"></center>
                                    <center><a href="#">Transfer Bank</a></center>
                                  </ul>
                                </div>
                              </label>
                            </div>
                          </div>
                          <input type="radio" name="pembayaran" value="Virtual Account" id="virtualaccount">
                          <input type="radio" name="pembayaran" value="Transfer Bank" id="transferbank">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <a href="transaksi_berhasil.html"><button type="submit" class="sites-btn">Checkout</button></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</x-layout>
