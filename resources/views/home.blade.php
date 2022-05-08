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
                      <x-product-card/>
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
