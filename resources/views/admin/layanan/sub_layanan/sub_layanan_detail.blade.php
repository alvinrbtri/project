<div class="container mt-2 mb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('/storage/' . $detail->gambar) }}" class="d-block w-100" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="/user/subkategori/detailbaru"><p class="card-title"><b>{{$detail->nama}}</b></p></a>
                        </div>
                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                            <b>IDR {{$detail->harga}} / hari</b>
                            </p> 
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="alamat">
                                    <p style="font-size: 13px">{{$detail->alamat}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="oc">
                                    <p style="font-size: 15px; color: #00B56A"><b>{{$detail->status2}}</b></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="oc">
                                    <p style="font-size: 15px">{{$detail->status1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>