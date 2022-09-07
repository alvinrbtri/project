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
            {{-- <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div> --}}
        </div>
{{-- <div class=""> --}}

    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="d-flex align-items-center card">

        <div class="container ">
            <div class="row p-3">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Bingung Mau nitip barang dimana?</h1>

                    <h2>Titipsini aja</h2>

                    <h2>Semua bisa dititipkan termasuk barang, rumah
                        atau kendaraan.</h2>
                    <div>
                        <a href="#services" class="btn-get-started scrollto">Titip Sekarang!</a>
                    </div>

                    <div class="icon" class="back-in-time" style="margin-top: 30px;">
                        <img src="../assets/img/reload.png" style="width: 35px; height: 30px" >
                        <span style="font-size: large;"> Melayani 24 Jam</span>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="../assets/img/illust.png" class="img-fluid animated" style="width: 400px; height: 400px">
                </div> 
            </div>
        </div>

    </section><!-- End Hero --> --}}
{{-- </div> --}}
  <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader" >
                        <h4>Data Home</h4>
                        <a href="/admin/home/tambahhome" class="btn btn-thema">Tambah</a>
                    </div>
                    <br>
                    <!--Alert-->
                    {{-- @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                    @endif --}}
                    <table>
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Gambar</td>
                                <td>Judul</td>
                                <td>Sub Judul</td>
                                <td>Deskripsi</td>
                                <td>Dibuat</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $no = 1;
                            @endphp
                            @foreach ($data as $index => $home)
                            <tr>
                                <td scope="row">{{ $index + $data->firstItem() }}</td>
                                <td>
                                    <img src="{{ asset('gambarhome/'.$home->gambar)}}" alt="" style="width: 50px;">
                                </td>
                                <td>{{ $home->judul }}</td>
                                <td>{{ $home->sub_judul }}</td>
                                <td>{!! $home->deskripsi !!}</td>
                                <td>{{ $home->created_at->format('D M Y')}}</td>
                                <td class="td" style="size: 30px;">
                                    <a href="/admin/home/tampilhome/{{ $home->id }}" class="btn btn-info">
                                        Edit</i>
                                    </a>

                                    <a href="#" class="btn btn-danger deletehome" data-id="{{ $home->id }}" data-judul="{{ $home->judul }}">
                                        Hapus</i>
                                    </button>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links ()}}
                </div>
            </div>
        </div>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<!--Sweet Alert-->
<script>
    $('.deletehome').click( function(){
        //membuat variable baru
        var homeid = $(this).attr('data-id');
        var judul = $(this).attr('data-judul');
        swal({
            title: "Apa kamu yakin?",
            text: "Kamu akan menghapus data home dengan judul"+judul+" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            window.location ="/admin/home/deletehome/"+homeid+" "
            if (willDelete) {
            swal("Data berhasil di hapus", {
            icon: "success",
        });
            } else {
                swal("Data tidak berhasil di hapus!");
            }
        });
    });
</script>
<script>
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif
</script>
</section>
@endsection