<x-layout :title="$title">

<!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/Background.png">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2>Bantuan</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Breadcrumb Section End -->

<!-- Contact Form Begin -->
  <div class="contact-form spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact__form__title">
            <img class="gambarhubungikami" src="img/hubungikami.svg" alt="">
            <h2 class="bantuanh2-chatdenganadmin">Anda Butuh Bantuan Kami?</h2>
            <h6 class="bantuanh6-chatdenganadmin">Silahkan isi form dibawah ini untuk memulai fitur chat dengan admin!</h6>
          </div>
        </div>
      </div>
      <form action="#">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Nama Anda">
          </div>
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Email Anda">
          </div>
          <div class="col-lg-12 text-center">
            <textarea placeholder="Isi dengan Detail masalah yang anda alami"></textarea>
            <button type="submit" class="site-btn">MULAI CHAT DENGAN ADMIN</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Contact Form End -->
</x-layout>