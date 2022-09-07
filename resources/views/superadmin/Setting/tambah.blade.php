@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Tambah Admin</h2>
                </div>
            </div>

            <div class="details1">
                <div class="recentOrders">
                        <table class="table-borderless mt-3 w-auto">
                            <thead>
                                <tr>
                                    <td>Nama Admin</td>
                                    <td>Alamat Admin Kantor</td>
                                    <td>Id Admin</td>
                                    <td>Status Admin</td>
                                    <td class="text-center" style="width: 20%">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Robecca Howard</td>
                                    <td>Yogyakarta</td>
                                    <td>123432</td>
<<<<<<< HEAD
                                    <td>Sudah ditambahkan</td>
                                    <td>
                                        <button class="btn btn-success">
                                            Tambah +<i class='bx bx-adds'></i>
                                        </button> 
=======
                                    <td>Belum ditambahkan</td>
                                    <td class="text-end">
                                        <div class="btn btn-success col-md-8">
                                         Tambahkan  <i class='bx bx-plus'></i>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Robecca Howard</td>
                                    <td>Yogyakarta</td>
                                    <td>123432</td>
                                    <td>Belum ditambahkan</td>
                                    <td class="text-end">
                                        <div class="btn btn-success col-md-8">
                                         Tambahkan <i class='bx bx-plus'></i>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Robecca Howard</td>
                                    <td>Yogyakarta</td>
                                    <td>123432</td>
                                    <td>Sudah Ditambahkan</td>
                                    <td class="text-end">
                                        <div class="col-md-8 btn btn-success">
                                            <i style="font-size:23px" class='bx bx-check-circle '></i>                              
                                        </div> 
>>>>>>> 6d38ed5d0c44e571a0cc720f79769f942f543f57
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <!-- New Customer -->
    
            </div>
        </div>
    </section> 
@endsection