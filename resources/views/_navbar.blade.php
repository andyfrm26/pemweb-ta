<!-- Header Section Begin -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            @if(Auth::user() != null)
            <a href="/imperfect/home">
              <img src="/img/logo.svg" alt="">
            </a>
            @else
            <a href="/">
              <img src="/img/logo.svg" alt="">
            </a>
            @endif
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="{{ ($title === 'home') ? 'active' : '' }}"><a href="/imperfect/home">Home</a></li>
              <li class="{{ ($title === 'about') ? 'active' : '' }}"><a href="/about">Tentang</a></li>
              <li class="{{ ($title === 'faq') ? 'active' : '' }}"><a href="/faq">FAQ</a></li>
            </ul>
          </nav>
        </div>
        @if ($title != 'login' && $title != 'sign-up' && $title != 'about' && $title != 'faq')
          
        <div class="col-lg-3">
          <div class="header__cart">
            <ul>
              <li class="menuprofil"><a href="#"><i class="fa fa-bell"></i><span>4</span></a>
                <div class="submenuprofil">
                  <ul>
                    <li><a href="order"><i class="fa fa-tag"></i> Promo 11.11!</a></li>
                    <li><a href="order"><i class="fa fa-tag"></i> Promo Akhir Bulan!</a></li>
                    <li><a href="order"><i class="fa fa-star"></i> Ayo beri review pada Jeruk Bali anda!</a></li>
                    <li><a href="order"><i class="fa fa-motorcycle"></i> Apel Malang Anda telah Dikirim!</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="cart"><i class="fa fa-shopping-cart"></i><span>{{ \App\Models\Cart::where('user_id', Auth::user()->id)->where('status', false)->count() }}</span></a></li>
              <li class="menuprofil"><a href="#"><i class="fa icon_profile"></i></a>
                <div class="submenuprofil">
                  <ul>
                    <li><a href="profile"><i class="fa icon_profile"></i>Profil</a></li>
                    <li><a href="order"><i class="fa icon_box-checked"></i> Pesanan Saya</a></li>
                    <li><a href="history"><i class="fa fa-history"></i> History Belanja</a></li>
                    <li><a href="wishlist"><i class="fa fa-heart"></i> Wishlist </a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out"></i> Sign Out </a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        @endif
      </div>
    </div>
  </header>
<!-- Header Section End -->