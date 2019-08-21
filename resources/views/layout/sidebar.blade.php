<div class="sidebar">
    <ul class="navigation-menu">
        <li class="nav-category-divider">MENU</li>
        <li class="class=active">
            <a href="{{ url('/')}} " aria-expanded="true"><span class="link-title">Dashboard</span><i
                    class="mdi mdi-gauge link-icon"></i></a>
        </li>
        <li>
            <a href="#master-data" data-toggle="collapse" aria-expanded="false"><span class="link-title">Master
                    Data</span><i class="mdi mdi-bullseye link-icon"></i></a>
            <ul class="collapse navigation-submenu " id="master-data">
                <li>
                    <a href="{{ url('urusan') }}">Data Urusan</a>
                </li>
                <li>
                    <a href="{{ url('bidang') }}">Data Bidang</a>
                </li>
                <li>
                    <a href="{{ url('unit') }}">Data Unit</a>
                </li>
                <li>
                    <a href="{{ url('subunit') }}">Data Sub Unit</a>
                </li>
                <li>
                    <a href="{{ url('program') }}">Data Program</a>
                </li>
                <li>
                    <a href="{{ url('kegiatan') }}">Data Kegiatan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#input-data" data-toggle="collapse" aria-expanded="false"><span class="link-title">Kinerja &amp;
                    Keuangan</span><i class="mdi mdi-pencil link-icon"></i></a>
            <ul class="collapse navigation-submenu " id="input-data">
                <li>
                    <a href="{{ url('kinerja') }}">Data Kinerja</a>
                </li>
                <li>
                    <a href="{{ url('keuangan') }}">Data Keuangan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#musrenbang_reses" data-toggle="collapse" aria-expanded="false"><span class="link-title">Musrenbang
                    &amp;
                    Reses</span><i class="mdi mdi-file link-icon"></i></a>
            <ul class="collapse navigation-submenu " id="musrenbang_reses">
                <li>
                    <a href="{{ url('kamus_usulan') }}">Kamus Usulan</a>
                </li>
                <li>
                    <a href="{{ url('musrenbang') }}">Musrenbang</a>
                </li>
                <li>
                    <a href="{{ url('reses') }}">Reses</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#laporan" data-toggle="collapse" aria-expanded="false"><span class="link-title">Laporan</span><i
                    class="mdi mdi-chart-bar link-icon"></i></a>
            <ul class="collapse navigation-submenu " id="laporan">
                <li>
                    <a href="{{ url('monev') }}">Monitoring Evaluasi Kinerja dan Keuangan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pengaturan" data-toggle="collapse" aria-expanded="false"><span
                    class="link-title">Pengaturan</span><i class="mdi mdi-settings link-icon"></i></a>
            <ul class="collapse navigation-submenu " id="pengaturan">
                <li>
                    <a href="{{ url('user') }}">Manajemen User</a>
                </li>
                <li>
                    <a href="{{ url('tahapan') }}">Manajemen Tahapan</a>
                </li>
                <li>
                    <a href="{{ url('halaman') }}">Manajemen Halaman</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidebar_footer">
        <div class="user-account">
            <div class="user-profile-item-tittle">Administrator</div>
            <div class="user-profile-itemcategory"><a class="user-profile-item" href="#">

                </a></div><a class="user-profile-item" href="#"><i class="mdi mdi-account"></i> Profile</a> <a
                class="user-profile-item" href="#"><i class="mdi mdi-settings"></i> Account Settings</a> <a
                class="btn btn-primary btn-logout" href="#">Logout</a>
        </div>
        <div class="btn-group admin-access-level">
            <div class="avatar"><img class="profile-img" src="../assets/images/profile/male/image_1.png" alt=""></div>
            <div class="user-type-wrapper">
                <p class="user_name">Administrator</p>
                <div class="d-flex align-items-center">
                    <div class="status-indicator small rounded-indicator bg-success"></div><small
                        class="user_access_level">Admin</small>
                </div>
            </div><i class="arrow mdi mdi-chevron-right"></i>
        </div>
    </div>
</div>


