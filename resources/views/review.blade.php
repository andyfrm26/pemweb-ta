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
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <br>
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
