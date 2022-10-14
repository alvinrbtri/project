@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">

<body>
<div class="main">
    <div class="topbar">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <!-- Search -->
        <div class="search" data-aos="fade-left" data-aos-duration="1000">
            <label>
                <input type="text" placeholder="Cari Disini">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
    </div>
    <div class="details3">
        <div class="recentOrders3">
            <div class="row">
                <div class="cardHeader3 col-md-10">
                    <h2>Data Home Tentang</h2>
                </div>
                <div class="col-md-2 text-end ">
                    <h2 class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i> Tambah</h2>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Gambar</td>
                        <td>Heading</td>
                        <td>Deskripsi</td>
                        <td class="col-sm-2 text-center">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse  ($tentang as $tentang ) --}}
                    <tr>
                        {{-- <td><img src="{{ Storage::url('public/app/tentang/') .$tentang->gambar}}" alt="" style="max-width:100px; max-height:50px"></td>
                        <td>{{ $tentang->heading }}</td>
                        <td> {{ $tentang->deskripsi}}</td> --}}
                       
                        <td class="text-end">
                            <div class="row col-md-12">
                                <div class="col-md-4">
                                    <button class="btnedit" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                </div>
                                <div class="col-md-4 text-end">
                                    {{-- <form  onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tentang.destroy', $tentang->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btndelete">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </form> --}}
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- @empty
                    <div class="alert alert-danger">
                        Data Post belum Tersedia.
                    </div>
                    @endforelse --}}
                </tbody>
            </table>
            {{-- {{ $tentang->links() }} --}}

        </div>
    </div>
</div>

</body>
</section>
@endsection