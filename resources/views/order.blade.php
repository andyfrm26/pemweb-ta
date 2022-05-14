<x-layout :title="$title">
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/img/Background.png">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <div class="breadcrumb__text">
                  <h2>Status Belanja</h2>
                  <div class="breadcrumb__option">
                      <span>Cek Status Pesanan Anda Disini</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Section End -->


<section class="shoping-cart spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Produk</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allOrder as $o)
                  <tr>
                    <td class="shoping__cart__item">
                      <img src="/img/Carrot.png" alt="">
                      <h5>{{ $o->produk->nama}}</h5>
                    </td>
                    <td class="shoping__cart__price">Rp {{ number_format($o->produk->harga, 0, '','.') }}</td>
                    <td class="shoping__cart__total">{{ $o->payment->status }}</td>
                    <td class="shoping__cart__total"><a href="#" class="primary-btn">Lacak</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
</section>
</x-layout>