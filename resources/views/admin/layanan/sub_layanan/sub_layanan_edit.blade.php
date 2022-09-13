<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->gambar }}">
<div class="form-group">
    <label>Nama Vendor</label>
    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $edit->nama }}" required>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $edit->harga }}">
    @error('harga')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $edit->alamat }}">
    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ $edit->deskripsi }}">
    @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-3">
    <label>Keterangan</label>
    <div>
        <select class="form-control mb-3" name="status2">
            <option value="buka" {{ $edit->status2 == "buka" ? 'selected' : '' }}>Buka</option>
            <option value="tutup" {{ $edit->status2 == "tutup" ? 'selected' : '' }}>Tutup</option>
        </select>
        @error('status2')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
</div>

<div class="form-group">
    <label>Ketersediaan</label>
    <div>
        <select class="form-control mb-3" name="status1">
            <option value="tersedia" {{ $edit->status1 == "tersedia" ? 'selected' : '' }}>Tersedia</option>
            <option value="tidak tersedia" {{ $edit->status1 == "tidak tersedia" ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
        @error('status1')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 form-label" for="inputgambar" >Slider Image</label>
    <img src="{{ url('/storage/'.$edit->gambar) }}" class="img-fluid mb-3 gambar-preview_new" id="tampilGambar">
    <input type="file" class="form-control" id="gambar_new" name="gambar_new" onchange="previewImage()">
        @error('gambar')
            <p class="text-danger">{{$message}}</p>
        @enderror
</div>

<script type="text/javascript">
    function previewImage() {
            const image = document.querySelector("#gambar_new");
            const imgPreview = document.querySelector(".gambar-preview_new");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").width("100%");
                $("#tampilGambar").height("300");
            }
    }
</script>
