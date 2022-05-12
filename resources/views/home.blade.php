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
                <input type="text" placeholder="Populer : Jeruk Bali, Apel Malang, Alpukat Mentega">
                <button type="submit" class="site-btn">Cari</button>
              </form>
            </div>
          </div>
          <!-- Catalog Section Begin -->
            <section class="featured">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12"></div>
                    </div>
                    <div class="row featured__filter">
                    @foreach($produk as $p)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/Orange.jpg" style="background-image: url('/img/featured/Orange.jpg');">
                          <ul class="featured__item__pic__hover">
                            <li><a href="/imperfect/add-wishlist/{{$p->id}}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="produk_jerukbali.html"><i class="fa fa-info"></i></a></li>
                            <li><a href="voucher"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                        </div>
                        <div class="featured__item__text">
                          <h6><a href="produk_jerukbali.html">{{$p->nama}}</a></h6>
                          <h5>Rp {{ number_format($p->harga, 0, '','.') }}/Kg</h5>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </section>
          <!-- Catalog Section End -->
        </div>
      </div>
    </div>
  </section>
<!-- Hero Section End -->
</x-layout>
