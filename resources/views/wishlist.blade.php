<x-layout :title="$title">
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/Background.png">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      <h2>Wishlist</h2>
                      <div class="breadcrumb__option">
                          <span>Cek Wishlist Anda Disini</span>
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
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="img/Carrot.png" alt="">
                                      <h5>Wortel Organik</h5>
                                  </td>
                                  <td class="shoping__cart__price">
                                      Rp 10.000
                                  </td>

                                  <td class="shoping__cart__total">
                                      Harga Turun 5%
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="#" class="primary-btn">Beli Sekarang</a>
                                  </td>

                              </tr>
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="img/Jeruk.png" alt="">
                                      <h5>Jeruk Jamaika</h5>
                                  </td>
                                  <td class="shoping__cart__price">
                                      Rp 15.000
                                  </td>

                                  <td class="shoping__cart__total">
                                      Harga Turun 10%
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="#" class="primary-btn">Beli Sekarang</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="img/Jeruk_bali.png" alt="">
                                      <h5>Jeruk Bali</h5>
                                  </td>
                                  <td class="shoping__cart__price">
                                      Rp15.000
                                  </td>

                                  <td class="shoping__cart__total">
                                      Harga Turun 15%
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="#" class="primary-btn">Beli Sekarang</a>
                                  </td>

                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>



  </section>
</x-layout>