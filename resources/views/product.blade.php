<x-layout :title="$title">
<!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
          @include('_sidebar')
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="/imperfect/home/">
                  <div class="hero__search__categories">Semua Kategori <span class="arrow_carrot-down"></span></div>
                  <input type="text" name="search" placeholder="Cari buah dan sayur">
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
                  <p>Home / Buah {{ $produk->nama }}</p>
                  <h2>{{ $produk->nama }}</h2>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-full"></i>
                  </div>
                  <h4>Rp. {{ $produk->harga }}/Kg</h4>
                  <form action="/imperfect/add-cart-with-value/{{$produk->id}}" method="post">
                    @csrf
                  <input type="number" name="qty" value="1" />
                  <button type="submit" class="btn-addcart">Masukkan Keranjang</button>
                  </form>
                  <h4>Detail Produk&ensp; <i class="fa fa-indent"></i></h4>
                  <p>{{ $produk->deskripsi }}</p>
                  <h4>Nilai produk ini</h4>
                  <p>Beri tahu ulasan anda mengenai produk ini</p>  
                  <div class="product-form pad-form-20">
                    <form action="#">
                      <div class="rating-review">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>  
                      <textarea placeholder="Tulis ulasan anda tentang produk ini di sini..."></textarea>
                      <br/>
                      <button type="submit" class="site-btn">Kirim Ulasan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="small-container review-product">
              <div class="row row-2">
                <h2>Ulasan Produk</h2>
                <a class="selengkapnya" href="#">Selengkapnya</a>
              </div>
            </div>

            <div class="small-container review-product">
              <div class="reviews-container">
                @foreach($review as $r)
                <div class="single-review">
                  <span class="reviewer-name">
                    <h5>{{$r->user->name}}</h5>
                  </span>
                  <span class="reviewer-rating">
                    @for($i = 1; $i <= $r->nilai; $i++)
                    <i class="fa fa-star"></i>
                    @endfor
                  </span>
                  <span class="reviewer-review">{{ $r->ulasan }}</span>
                </div>
                @endforeach
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
                  @foreach($recom as $r)
                  <div class="col-4">
                    <a href="/imperfect/product/{{$r->id}}"><img src="/img/produk/jerukjamaika/previewjerukbali.png" alt="" /></a>
                    <a href="/imperfect/product/{{$r->id}}">
                      <h5>{{ $r->nama }}</h5>
                    </a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Rp.  {{ number_format($r->harga, 0, '','.') }}/Kg</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <!-- other products end -->
          </div>
      </div>
    </div>
  </section>
<!-- Hero Section End -->
</x-layout>