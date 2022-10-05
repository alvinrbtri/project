<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label>Nama vendor</label>
    <input type="text" name="nama_vendor" class="form-control @error('nama_vendor') is-invalid @enderror" value="{{ old('nama_vendor') }}{{ $edit->nama_vendor }}">
    @error('nama_vendor')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Harga</label>
    <input name="harga" class="form-control @error('harga') is-invalid @enderror"
    value="{{ old('harga') }} {{ $edit->harga }}" id="edit" >
    @error('harga')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="image_new"> Gambar </label>
    <input type="file" class="form-control " name="image_new" id="image_new">
</div>

<div class="form-group">
    <label>Status Penitipan</label>
    <div>
        <select class="form-control mb-3" name="status">
            <option>-- Pilih saja --</option>
            <option value="tersedia">Tersedia</option>
            <option value="tidak tersedia">Tidak Tersedia</option>
        </select>
        @error('status')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
</div>

<div class="form-group mb-3">
    <label>Kategori</label>
    <div>
        <select class="form-select" name="kategori_id" id="kategori_id">
            <option value="">-- Pilih --</option>
            @foreach ($kategori as $sdata)
             <option value="{{ $sdata->id }}">{{ $sdata->kategori }}</option>
            @endforeach
        </select>
    </div>
</div>

<script>
    CKEDITOR.replace('edit');
</script>