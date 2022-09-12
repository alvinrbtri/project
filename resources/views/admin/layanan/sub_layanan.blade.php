

@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Sub Layanan</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Nama Vendor</td>
                            <td>Harga</td>
                            <td>Alamat</td>
                            <td>Tersedia</td>
                            <td>Buka</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($sublayanan as $sublyn)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{url('/storage/' .$sublyn->gambar)}}" style="width:50px;"> </td>
                                <td>{{ $sublyn->nama }}</td>
                                <td>{{ $sublyn->harga }}</td>
                                <td>{{ $sublyn->alamat }}</td>
                                <td>{{ $sublyn->status1 }}</td>
                                <td>{{ $sublyn->status2 }}</td>
                                <td class="td" style="size: 30px;">
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $sublyn->id }}" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal8-{{ $sublyn->id }}" class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete" ><a href="javascript:" rel="{{ $sublyn->id }}" rel1="kategori" id="deletekategori" class="bx bx-trash" ></a></button>
                                    {{-- <a rel="{{ $mhs->id }}" rel1="mahasiswa" href="javascript:" class="btn btn-danger" 
                                        id="deletemahasiswa">Hapus</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah SubLayanan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('/post')}}" method="POST" enctype="multipart/form-data">
                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                {{ session('berhasil') }}
                            </div>
                        @endif
                        @csrf
                            <div class="form-group">
                                <label>Nama Vendor</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}">
                                @error('deskripsi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Keterangan Toko</label>
                                <div>
                                    <select class="form-control mb-3" name="status2">
                                        <option value="buka">Buka</option>
                                        <option value="tutup">Tutup</option>
                                    </select>
                                    @error('status2')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kapasitas</label>
                                <div>
                                    <select class="form-control mb-3" name="status1">
                                        <option value="tersedia">Tersedia</option>
                                        <option value="tidak tersedia">Tidak Tersedia</option>
                                    </select>
                                    @error('status1')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 form-label" for="inputgambar" >Product Image</label>
                                <input type="file" class="form-control" name="gambar">
                                    @error('gambar')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            
                            <div class="modal-footer d-md-block">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <button type="button" class="btn btn-danger btn-sm">Batal</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    @foreach ( $sublayanan as $lyn)
        <div class="modal fade" id="exampleModal-{{ $lyn->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:45%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Kategori</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/edit'. $lyn->id) }}" method="POST">
                            @if (session('berhasil'))
                                <div class="alert alert-success">
                                    {{ session('berhasil') }}
                                </div>
                            @endif
                            @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $lyn->nama }}">
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $lyn->harga }}">
                                    @error('harga')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $lyn->alamat }}">
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ $lyn->deskripsi }}">
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="form-group mb-3">
                                    <label>Keterangan Toko</label>
                                    <div>
                                        <select class="form-control mb-3" name="status2">
                                            <option value="buka">Buka</option>
                                            <option value="tutup">Tutup</option>
                                        </select>
                                        @error('status2')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label>Kapasitas</label>
                                    <div>
                                        <select class="form-control mb-3" name="status1">
                                            <option selected>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                        </select>
                                        @error('status1')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-md-4 form-label" for="inputgambar" >Product Image</label>
                                    <input type="file" class="form-control" name="gambar">
                                        @error('gambar')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                                
                                <div class="modal-footer d-md-block">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Detail-->
    @foreach ($sublayanan as $lyn)  
        <div class="modal fade" id="exampleModal8-{{ $lyn->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 40%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">DetailKategori</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                        
                            
                    <div class="card-body">
                                <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>

                                <div class="row">
                                    <div class="col">
                                        <a href="/user/subkategori/detailbaru"><p class="card-title"><b>{{$lyn->nama}}</b></p></a>
                                    </div>
                                    <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                        <b>IDR {{$lyn->harga}} / hari</b>
                                    </p> 
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="alamat">
                                            <p style="font-size: 13px">{{$lyn->alamat}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="oc">
                                            <p style="font-size: 15px; color: #00B56A"><b>{{$lyn->status2}}</b></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="oc">
                                            <p style="font-size: 15px">{{$lyn->status1}}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                       
                    <div class="modal-footer d-md-block">
                        <button type="button" class="btn btn-danger btn-sm"data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach 


</section>

{{-- JS delete --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('#deletekategori').click(function(){
          var id = $(this).attr('rel');
          var deleteFunction = $(this).attr('rel1')
          swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
          },
                function(){
                window.location.href="/delete/"+deleteFunction+"/"+id;
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
        });
</script>

{{-- JS CKeditor --}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
<script>
    CKEDITOR.replace('my-edit');
    </script>
@endsection
