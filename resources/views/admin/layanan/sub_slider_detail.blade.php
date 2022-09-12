<div class="container mt-2 mb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('/storage/' . $detail->gambar) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $detail->judul }}</h5>
                    <p>{{ $detail->deskripsi_singkat }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
