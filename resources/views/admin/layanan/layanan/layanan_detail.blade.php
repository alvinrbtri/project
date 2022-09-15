<div class="container mt-2 mb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-body">
                    <div class="row align-items-center" style=" margin-left:70px;">
                        <div class="col-md-8 col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="img mb-3">
                                    <img src="{{ url('/storage/' . $detail->gambar) }}" class="d-block w-100" alt="...">
                                </div>
                                <h4 class="title">{{$detail->judul}}</h4>
                                <b>
                                    <p class="description">{!! $detail->deskripsi !!}</p>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

