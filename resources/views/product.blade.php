<x-layout :title="$title">
<!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
          @include('_sidebar')
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="#">
                  <div class="hero__search__categories">Semua Kategori <span class="arrow_carrot-down"></span></div>
                  <input type="text" placeholder="Cari buah dan sayur">
                  <button type="submit" class="site-btn">Cari</button>
                </form>
              </div>
            </div>
            <!-- single product details -->
            <div class="small-container single-product">
              <div class="row">
                <div class="col-lg-4">
                  <img src="/img/produk/alpukatmentega/alpukat1.png" alt="" width="100%" id="ProductImg" />
                  <div class="small-img-row">
                    <div class="small-img-col"><img src="/img/produk/alpukatmentega/alpukat1.png" alt="" width="100%" class="small-img" /></div>
                    <div class="small-img-col"><img src="/img/produk/alpukatmentega/alpukat2.png" alt="" width="100%" class="small-img" /></div>
                    <div class="small-img-col"><img src="/img/produk/alpukatmentega/alpukat3.png" alt="" width="100%" class="small-img" /></div>
                    <div class="small-img-col"><img src="/img/produk/alpukatmentega/alpukat4.png" alt="" width="100%" class="small-img" /></div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <p>Home / Buah {{ $namaBuah }}</p>
                  <h2>{{ $namaBuah }}</h2>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-full"></i>
                  </div>
                  <p>Terjual {{ $terjual }} kali</p>
                  <h4>Rp. {{ $hargaBuah }}/Kg</h4>
                  <input type="number" value="1" />
                  <a href="" class="btn-addcart">Masukkan Keranjang</a>
                  <h4>Detail Produk&ensp; <i class="fa fa-indent"></i></h4>
                  <p>{{ $detailBuah }}</p>
                  <h4>Nilai produk ini</h4>
                  <p>Beri tahu ulasan anda mengenai produk ini</p>
                  <div class="rating-review">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-form pad-form-20">
                    <form action="#">
                      <textarea placeholder="Tulis ulasan anda tentang produk ini di sini..."></textarea><br />
                      <button type="submit" class="site-btn">Kirim Ulasan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

              <!-- title -->
              <div class="small-container">
                <div class="row row-2">
                  <h2>Lihat Juga</h2>
                  <a class="selengkapnya" href="homepage.html">Selengkapnya</a>
                </div>
              </div>

              <!-- products -->
              <div class="small-container">
                <div class="row-related">
                  <div class="col-4">
                    <a href="produk_jerukbali.html"><img src="img/produk/jerukjamaika/previewjerukbali.png" alt="" /></a>
                    <a href="produk_jerukbali.html">
                      <h5>Jeruk Bali</h5>
                    </a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Rp. 15.000/Kg</p>
                  </div>
                  <div class="col-4">
                    <a href="produk_jerukjamaika.html"><img src="img/produk/apelmalang/previewjerukjamaika.png" alt="" /></a>
                    <a href="produk_jerukjamaika.html">
                      <h5>Jeruk Jamaika</h5>
                    </a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Rp. 15.000/Kg</p>
                  </div>
                  <div class="col-4">
                    <a href="produk_apelmalang.html"><img src="img/produk/stroberiorganik/previewapelmalang.png" alt="" /></a>
                    <a href="produk_apelmalang.html">
                      <h5>Apel Malang</h5>
                    </a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Rp. 15.000/Kg</p>
                  </div>
                </div>
              </div>
              <!-- other products end -->
          </div>
      </div>
    </div>
  </section>
<!-- Hero Section End -->
</x-layout>