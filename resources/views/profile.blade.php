<x-layout :title="$title">
  <br>
  <!-- Contact Form Begin -->
  <div class="contact-form spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img src="img/profilku.png" alt="profilku" class="center-profilku">
          <div class="contact__form__title">
            <h2>Profil</h2>
          </div>
        </div>
      </div>
      <form action="#">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Nama Depan">
          </div>
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Nama Belakang">
          </div>
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Alamat Email">
          </div>
          <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="No. Hp">
          </div>
        </div>
      </form>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact__form__title">
              <h2>Informasi General</h2>
            </div>
          </div>
        </div>
        <form action="#">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <input type="date" placeholder="Tanggal Lahir">
            </div>
            <div class="col-lg-6 col-md-6">
              <input type="text" placeholder="Alamat">
            </div>
            <div class="col-lg-6 col-md-6">
              <input type="text" placeholder="Kota">
            </div>
            <div class="col-lg-6 col-md-6">
              <input type="text" placeholder="Kode Pos">
            </div>
            <div class="col-lg-12 text-center">
              <button type="submit" class="site-btn" style="border-radius:15px" ;>Simpan Profil</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Contact Form End -->
  <br>
</x-layout>