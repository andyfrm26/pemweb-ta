<x-layout :title="$title">
  <br>
  <!-- Contact Form Begin -->
  <div class="contact-form spad">

      <div class="container">
          <form action="change-profile" method="post" enctype="multipart/form-data">
            <div class="profile-pic-div">
                <img src="/img/photo_profile/{{ Auth::user()->foto}}" id="photo">
                <input type="file" id="file" name="profile">
                <label for="file" id="uploadBtn">Ganti foto profil</label>
            </div>
              @csrf
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <input type="text" name="alamat" placeholder="Alamat" value="{{ Auth::user()->alamat}}">
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <input type="text" name="email" placeholder="Alamat Email" value="{{ Auth::user()->email}}">
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <input type="text" name="pos" placeholder="Kode Pos" value="{{ Auth::user()->kode_pos}}">
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="site-btn" style="border-radius:15px" ;>Simpan Profil</button>
                    </div>
          </form>
      </div>
  </div>
  <!-- Contact Form End -->
  <br>
</x-layout>