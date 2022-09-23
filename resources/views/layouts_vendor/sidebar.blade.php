<div class="sidebar">
    <div class="logo-details">
        <div class="profile-content">
            <img class="p-1 mt-1 ms-3" style="width: 45px; height: 45px;" src="{{ asset('Frame 172.png') }}" alt="Profile">
        </div>
        <a href="/" style="text-decoration: none;">
            <span class="logo_name">Titipsini.com</span>
        </a>
    </div>
    <ul class="nav-links">
        <li class="list {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
            <a href="/vendor/dashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="/vendor/vendor/dashboard_vendor">Dasboard</a></li>
            </ul>
        </li>
        <li class="list {{ Request::segment(2) == 'Profil' ? 'active' : '' }}">
            <a href="/Vendor/Profile/profile_vendor">
                <i class='bx bx-user'></i>
                <span class="link_name">Profile</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="/vendor/Profile/profile_vendor">Profile</a></li>
            </ul>
        </li>
        <li class="list {{ Request::segment(2) == 'pesanan' ? 'active' : '' }}">
            <div class="iocn-link">
                <a>
                    <i class="bi bi-bag-fill"></i>
                    <span class="link_name dropBtn">Pesanan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <div class="sub-menu">
                <div class="drop-box"> 
                    <a href="/vendor/homelagi">Pesanan Masuk</a>
                    <a href="/orderan_baru">Berlangsung</a>
                    <a href="/historybaru">History</a>
                   
                </div>
            </div>
        </li>
        <li class="list {{ Request::segment(2) == 'Vendor' ? 'active' : '' }}">
            <div class="iocn-link">
                <a>
                    <i class='bx bxs-shopping-bags'></i>
                    <span class="link_name dropBtn">Layanan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <div class="sub-menu">
                <div class="drop-box">
                    <a href="/Vendor/Kelola-Kendaraan/layanan_step1">Kelola Kendaraan</a>
                    <a href="/Vendor/Kelola_Barang/layanan_step1">Kelola Barang</a>
                    <a href="/Vendor/Kelola-Bangunan/layanan_step1">Kelola Bangunan</a>
                    <a href="/Vendor/Kelola-PickUp/layanan_step1">Kelola PickUp</a>
                </div>
            </div>
        </li>
        <li class="list {{ Request::segment(2) == 'Vendor' ? 'active' : '' }}">
            <div class="iocn-link">
                <a>
                    <i class="bi bi-cash-coin"></i>
                    <span class="link_name dropBtn">Keuangan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <div class="sub-menu">
                <div class="drop-box">
                    <a href="/vendor/keuangan/pemasukan">Penghasilan</a>
                    <a href="/vendor/keuangan/saldo">Saldo</a>
                    <a href="/vendor/keuangan/rekening">Rekening</a>
                </div>
            </div>
        </li>
        <li class="list {{ Request::segment(2) == 'setting' ? 'active' : '' }}">
            <a href="/admin/setting">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="/admin/setting">Setting</a></li>
            </ul>
        </li>
        {{-- <li class="list">
        
            <a style="color:white" href="{{ route('logout')  == 'logout' ? 'active' : '' }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i>
                    {{ __('Logout') }}
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            
        </li> --}}

        <li class="">
            <a style="color:white " id="" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
            </a>
        </li>
    </ul>
</div>

<!-- Modal Logout -->
{{-- <div class="modal fade" id="ModalLogout" tabindex="-1" aria-labelledby="ModalLogoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalLogoutLabel">Log Out <i class="bx bxs-lock-alt"></i></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to log-off?
            </div>
            <div class="modal-footer">
                <a href="{{ route('logout') }}" class="btn btn-danger"> Logout</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}