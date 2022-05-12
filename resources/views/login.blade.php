<x-layout :title="$title">
  <!-- Sign up Form Begin -->
    <section class="login-block"><br/><br/><br/>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <form class="md-float-material form-material" action="#" method="POST">
              <div class="auth-box card">
                <div class="card-block">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-center heading">Welcome back!</h3><br/>
                    </div>
                  </div>
                  <form action="{{route('loginCheck')}}" method="post">
                    @csrf
                  <div class="form-group form-primary"> <input type="text" class="form-control" name="email" value="" placeholder="Email" id="email"> </div>
                  <div class="form-group form-primary"> <input type="password" class="form-control" name="password" placeholder="Password" value="" id="password"> </div>
                  <div class="row">
                    <div class="align-self-center mx-auto"> <button type="submit" class="primary-btn">Masuk</button></div>
                  </div>
                  </form>
                  <div class="or-container">
                    <div class="line-separator"></div>
                    <div class="or-label">or</div>
                    <div class="line-separator"></div>
                  </div>
                  <div class="row">
                    <div class="align-self-center mx-auto"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="/home"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Masuk dengan Google</a> </div>
                  </div> <br>
                  <p class="text-inverse text-center">Belum punya akun? <a href="/sign-up" data-abc="true">Daftar</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>								                            
  <!-- Sign up Form End -->
</x-layout>
