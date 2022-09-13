<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->gambar }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $edit->judul }}" required>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi Singkat</label>
    <input type="text" name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" value="{{ $edit->deskripsi_singkat }}">
    @error('deskripsi_singkat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Status</label>
    <div>
        <select class="form-control mb-3" name="status">
            <option value="0" {{ $edit->status == 0 ? 'selected' : '' }}>InActive</option>
            <option value="1" {{ $edit->status == 1 ? 'selected' : '' }}>Active</option>
        </select>
        @error('status')
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