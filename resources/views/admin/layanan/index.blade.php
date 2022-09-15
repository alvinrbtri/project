@extends("layouts_admin.admin_layout")
@section("content")
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
                    <h4>Layanan</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <br>
                @if (session('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil')}}
                </div>
                @endif
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td class="col-md-2">Gambar</td>
                            <td>Judul</td>
                            <td>Slug</td>
                            <td>Deskripsi</td>
                            <td class="col-md-3 text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_layanan as $lyn)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ url('/storage/' .$lyn->gambar)}}" style="width: 120px;"></td>
                            <td>{{ $lyn->judul }}</td>
                            <td>{{ $lyn->slug }}</td>
                            <td>{!! $lyn->deskripsi !!}</td>
                            <td class="text-end" style="size: 30px;">
                                <button onclick="editLayanan({{$lyn->id}})" class="btnedit " data-bs-toggle="modal" data-bs-target="#exampleModalEdit" >
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button onclick="detailLayanan({{$lyn->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" class="btndetail">
                                    <i class='bx bx-detail'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#HapusLayanan{{ $lyn->id }}" class="btn btn-danger btn-sm fw-bold px-4">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @foreach ($data_layanan as $item)
    <div class="modal fade" id="HapusLayanan{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Layanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/layanan/'.$item->id) }}" method="POST">
                    @method("DELETE")
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-hapus">
                        Data ini akan dihapus?
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Tambah Layanan
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ url('/admin/layanan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                            value="{{ old('deskripsi') }}" id="create" >
                        </textarea>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 form-label" for="inputgambar">Gambar</label>
                        <input type="file" class="form-control"  name="gambar">
                        @error('gambar')
                        <div class="text-danger">{{ $message }}</div>
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

    <!-- Modal Edit-->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:45%">
            <div class="modal-content">
                <div class="modal-header header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Layanan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url ('/layanan/simpan') }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Detail-->
    <div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 40%">
            <div class="modal-content">
                <div class="modal-header hader text-center">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Layanan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-content-detail">

                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('#deletelayananbaru').click(function(){
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

    function previewImage() {
        const gambar = document.queryselector('#gambar');
        const imgPreview = document.queryselector('.img-preview');

        imgPreview.styp.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

{{-- JS CKeditor --}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('create');
</script>
<script type="text/javascript">
    function editLayanan(id) {
        $.ajax({
            url: "{{ url('/layanan/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

    function detailLayanan(id) {
        $.ajax({
            url: "{{ url('/layanan/detail') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        })
    }
</script>
@endsection
