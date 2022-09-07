

@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kategori Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Kategori</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            {{-- <td>Gambar</td> --}}
                            <td>Judul</td>
                            <td>Slug</td>
                            <td>Deskripsi</td>
                            <td>Gambar</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layanan as $lyn)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- <td><img src="{{asset('assets/img/ic2.png')}}"></td> --}}
                                <td>{{ $lyn->judul }}</td>
                                <td>{{ $lyn->slug }}</td>
                                <td>{!! $lyn->deskripsi !!}</td>
                                <td class="td" style="size: 30px;">
                                    <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $lyn->id }}" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1-{{ $lyn->id }}" class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button class="btndelete" ><a href="javascript:" rel="{{ $lyn->id }}" rel1="kategori" id="deletekategori" class="bx bx-trash" ></a></button>
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
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah Kategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('/post')}}" method="POST">
                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                {{ session('berhasil') }}
                            </div>
                        @endif
                        @csrf
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Subjudul</label>
                                <input type="text" name="subjudul" class="form-control @error('subjudul') is-invalid @enderror" value="{{ old('subjudul') }}">
                                @error('subjudul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" value="{{ old('kategori') }}">
                                @error('kategori')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" 
                                    value="{{ old('deskripsi') }}"id="my-edit" >
                                </textarea>
                                {{-- <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" id="my-editor> --}}
                                @error('deskripsi')
                                    <div class="alert alert-danger">{{ $message }}</div>
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
    @foreach ( $layanan as $lyn)
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
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $lyn->judul }}">
                                    @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Subjudul</label>
                                    <input type="text" name="subjudul" class="form-control @error('subjudul') is-invalid @enderror" value="{{ $lyn->subjudul }}">
                                    @error('subjudul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" value="{{ $lyn->kategori }}">
                                    @error('kategori')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" 
                                        value="{{ $lyn->deskripsi }}" id="my-edit" >
                                    </textarea>
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
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
    @foreach ($layanan as $lyn)  
        <div class="modal fade" id="exampleModal1-{{ $lyn->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 40%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">DetailKategori</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card text-center">
                        <div class="card-header">
                            {{ $lyn->judul }}
                        </div>
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxs-truck"></i></div>
                            <div class="card-body">
                            <h5 class="card-title">Layanan yang kami sediakan</h5>
                            <p>{{$lyn->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
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
