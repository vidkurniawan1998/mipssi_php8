<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Dosen - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="stikombalititle.png" rel="shorcut icon">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/adminlte.js"></script>
    <script type="text/javascript" src="/js/adminlte.min.js"></script>
</head>
<body>
<style>
   body
    {
        max-width:100%;
    }
/*Navbar Header Brand*/
    h2
    {
        position:fixed;
        margin-left:15pt;
    }

    .text-left
    {
        margin-left:45pt;
    }

/*Sidebar*/
    .sidebar
    {
        position:fixed;
        top:0;
        bottom:0;
        left:0;
        z-index:100;/*Behind The Navbar*/
        padding:0;
        box-shadow:inset -1px 0 0 rgba(0, 0, 0, -1);
    }

    .sidebar-sticky
    {
        position: -webkit-sticky;
        position:sticky;
        top: 48px; /*Height Of Navbar*/
        height:calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x:hidden;
        overflow-y:auto;/*Scrollable contents if viewport is shorter than content*/
    }

    .sidebar .nav-link
    {
        font-weight:500;
        color:#333;
    }

    .sidebar .nav-link.active
    {
        color:#007bff;
    }

    .nav-treeview
    {
        display:block;
        list-style:none;
        padding:0;
        background:transparent;
    }

    .menu-open
    {
        display:block;
    }

</style>
<!--Navbar Header-->
    <nav class="navbar navbar-expanded-sm bg-primary fixed-top">
        <div class="container-fluid">
            <img src="stikombaliwhite.png" alt="logo" style="width:40px;">
                <h2 class="text-left font-weight-bold"><font face="sans-serif" size="6" color="white">
                MIPSSI
                </font></h2>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link font-weight-bold" href="/logout"><font style="font-family:sans-serif;font-size:12pt;color:white;margin-left:20pt;">Sign out</font></a>
                </li>
            </ul>
        </div>
    </nav>

<!--Sidebar-->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column" data-widget="treeview" role="menu" data-accordion="false"><br>
                        <li class="nav-item">
                            <a class="nav-link" href="home"><span class="fa fa-home"></span>
                            Halaman Utama
                            <span class="sr-only">(Current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-envelope"></span>
                            Pengumuman
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link" href="tambahpengumuman"><span class="fa fa-plus"></span>
                                    Tambah Pengumuman
                                    </a>
                                    <a class="nav-link" href="daftarpengumuman" style="font-size:11pt;"><span class="fa fa-envelope"></span>
                                    Mengelola Pengumuman
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-suitcase"></span>
                            Dokumen
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link" href="tambahdokumen"><span class="fa fa-plus"></span>
                                    Tambah Dokumen
                                    </a>
                                    <a class="nav-link" href="daftardokumen"><span class="fa fa-suitcase"></span>
                                    Mengelola Dokumen
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-user"></span>
                            Mahasiswa
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link" href="tambahmahasiswa"><span class="fa fa-plus"></span>
                                    Tambah Mahasiswa
                                    </a>
                                    <a class="nav-link" href="daftarmahasiswa"><span class="fa fa-user"></span>
                                    Mengelola Mahasiswa
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-user-graduate"></span>
                            Dosen
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link active" href="tambahdosen"><span class="fa fa-plus"></span>
                                    Tambah Dosen
                                    </a>
                                    <a class="nav-link" href="daftardosen"><span class="fa fa-user-graduate"></span>
                                    Mengelola Dosen
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="jumlahaksesbilitas"><span class="fa fa-chart-line"></span>
                            Jumlah Aksesbilitas
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><br><br>

<!--Content (Isi)-->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
            <h1><font style="font-family:verdana;font-size:20pt;color:black;">Tambah Dosen</font></h1>
        </div>

        <div class="container">
            <form class="was-validated" action="{{url('tambahdosen/prosestambahdosen')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nama Lengkap :</font></label>
                    <input type="text" placeholder="Masukkan Nama Dosen" name="nama_lengkap" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                 <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Jenis Kelamin :</font></label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="customRadio" name="jenis_kelamin" value="Laki-Laki" required="required">
                        <label class="custom-control-label" for="customRadio">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="customRadio2" name="jenis_kelamin" value="Perempuan" required="required">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label><font face="verdana" size="3" color="black">Tempat Lahir :</font></label>
                        <input type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" class="form-control" required>
                        <div class="valid-feedback">Data Sudah Lengkap.</div>
                        <div class="invalid-feedback">Data Kurang Lengkap.</div>
                    </div>
                    <div class="col-md-3">
                        <label><font face="verdana" size="3" color="black">Tanggal Lahir : </font></label>
                        <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" class="form-control" required>
                        <div class="valid-feedback">Data Sudah Lengkap.</div>
                        <div class="invalid-feedback">Data Kurang Lengkap.</div>
                    </div>
                </div><br>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Pendidikan Terakhir :</font></label>
                        <select name="pendidikan_terakhir" class="form-control col-md-6" required>
                            <option value="">Pilih Pendidikan Terakhir</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <div class="valid-feedback">Data Sudah Lengkap.</div>
                        <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Alamat :</font></label>
                    <input type="text" placeholder="Masukkan Alamat" name="alamat" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nomor Telepon :</font></label>
                    <input type="text" placeholder="Masukkan Nomor Telepon" name="no_telepon" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nomor Handphone :</font></label>
                    <input type="text" placeholder="Masukkan Nomor Handphone" name="no_handphone" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Email :</font></label>
                    <input type="text" placeholder="Masukkan Email" name="email" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Foto Dosen :</font></label>
                    <input type="file" placeholder="Masukkan Foto Dosen" name="image" class="form-control col-md-6" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
                </div>

                <input type="submit" name="Submit" value="Submit" class="btn btn-info">
                <input type="reset" name="reset" value="Reset" class="btn btn-default">
            </form>
        </div>
        @include('sweetalert::alert')
</body>
</html>
