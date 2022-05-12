<x-layout :title="$title">
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/img/Background.png">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      <h2>History Belanja</h2>
                      <div class="breadcrumb__option">
                          <span>Cek Barang apa saja yang sudah pernah anda pesan</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Shoping Cart Section Begin -->
  <section class="shoping-cart spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="shoping__cart__table">
                      <table>
                          <thead>
                              <tr>
                                  <th class="shoping__product">Produk </th>
                                  
                      
                                  <th>Waktu Terima</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="/img/Jeruk.png" alt="">
                                      <h5>Jeruk</h5>
                                  </td>
                                 
                                  <td class="shoping__cart__quantity">
                                      10 Oktober 2021
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="produk_jerukjamaika.html" class="primary-btn">Beli Lagi</a>
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="review" class="primary-btn">Beri Ulasan</a>
                                  </td>
                                  
                              </tr>
                             
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="/img/Carrot.png" alt="">
                                      <h5>Wortel</h5>
                                  </td>
                                  
                                  <td class="shoping__cart__quantity">
                                      10 November 2021
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="produk_wortelorganik.html" class="primary-btn">Beli Lagi</a>
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="produk_wortelorganik.html" class="primary-btn">Beri Ulasan</a>
                                  </td>
                                  
                              </tr>
                              <tr>
                                  <td class="shoping__cart__item">
                                      <img src="/img/Jeruk_bali.png" alt="">
                                      <h5>Jeruk Bali</h5>
                                  </td>
                                 
                                  <td class="shoping__cart__quantity">
                                      17 Desember 2021
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="produk_jerukbali.html" class="primary-btn">Beli Lagi</a>
                                  </td>
                                  <td class="shoping__cart__total">
                                      <a href="produk_jerukbali.html" class="primary-btn">Beri Ulasan</a>
                                  </td>
                                  
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </section>
      
</x-layout>