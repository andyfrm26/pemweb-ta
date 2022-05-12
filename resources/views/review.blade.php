<x-layout :title="$title">
    <div class="card-ulasan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center heading">Ulasan produk</h3><br/>
                        </div>
                    </div>
                    <div class="small-container single-product-review">
                        <div class="row-review">
                            <div class="column-review">
                                <img src="/img/produk/apelmalang/apelmalang1.png" alt="apelmalang1" style="width:100%">
                            </div>
                            <div class="column-review">
                                <img src="/img/produk/apelmalang/apelmalang2.png" alt="apelmalang2" style="width:100%">
                            </div>
                            <div class="column-review">
                                <img src="/img/produk/apelmalang/apelmalang3.png" alt="apelmalang3" style="width:100%">
                            </div>
                        </div>
                        <br>
                        <p>Silahkan beri nilai untuk ulasan anda</p>
                        <div class="rating-review">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-form pad-form-20">
                            <p>Tambahkan gambar terhadap ulasan anda untuk membantu pembeli lain dalam berbelanja produk ini</p>
                            <form action="#">
                                <input class="UploadGambarUlasan" type="file" id="GambarUlasan" name="filename">
                            </form>
                        </div>
                        <br>
                        <div class="product-form pad-form-20">
                            <form action="#">
                                <textarea class="inputteksulasan" placeholder="Tulis ulasan anda tentang produk ini di sini..."></textarea>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button type="submit" class="site-btn">Kirim Ulasan</button>
                        </div>
                        <div class="margin-sendreview"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
