@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">

        <div class="main">
            <div class="topbar">
                {{-- <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div> --}}
                <!-- Search -->
                <div class="search" data-aos="fade-right" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
               
            </div>

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">OVERVIEW</p>
                        <h3>Admin Profile</h3>
                    </div>
                </div>
                {{-- Card User Profile --}}
                <div class="row g-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 mt-4 pe-2 mb-5">
                        <div
                            class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                            <div class="person-img px-xl-5">
                                <img src="{{ asset('assets/img/foto1.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="person-name">
                                <h2 class="text-center fs-4 my-2">SuperAdmin</h2>
                            </div>
                            <div class="person-email">
                                <h3 class="text-center fs-5 fw-normal mb-3">Superadmin@gmail.com</h3>
                            </div>
                            <div class="bt">
                                <button class="btn btn-outline-thema"> Edit </button>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="person-progress">
                                <p class="mb-1 d-inline">Workload</p>
                                <p class="float-end mb-0">74%</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 74%; background:#27CD88"
                                        aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="person-description">
                                <p class="mb-1" style="text-align: left;">Description</p>
                                <p class="text-black-50 text-wrap">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quod sed quas adipisci
                                    sequi atque. Provident quo ut recusandae debitis.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Form Edit User Profile --}}
                    <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
                        <div class="card-profile d-flex flex-column px-0 py-4">
                            <div class="id-user px-3">
                                <h6 class="mb-0 fw-bold float-left">Account ID : 1</h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class=" p-3">
                                <form class="row g-3 fw-bold">
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            placeholder="Input your Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control input-text" id="username"
                                            placeholder="Input your username">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control input-text" id="firstName"
                                            placeholder="Input your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control input-text" id="lastName"
                                            placeholder="Input your lastname">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control input-text" id="inputAddress"
                                            placeholder="Input your address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control input-text" id="inputCity"
                                            placeholder="Input your city">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose your state</option>
                                            <option>Indonesia</option>
                                            <option>Malaysia</option>
                                            <option>Australia</option>
                                            <option>United State</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="number" class="form-control input-text" id="inputZip">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="inputDescription" placeholder="Input your description"></textarea>
                                    </div>
                                    <div class="col-12 bt pt-2">
                                        <button type="submit" class="btn btn-thema fw-bold">Update Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Form Edit User Profile --}}
                </div>
                {{-- End User Profile --}}
            </div>
    </section>
@endsection
