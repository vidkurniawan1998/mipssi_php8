<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubah Profil - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylsheet"  type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/iconbar.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/adminlte.js"></script>
    <script type="text/javascript" src="/js/adminlte.min.js"></script>
    <script type="text/javascript" src="/js/sweetalert.js"></script>
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

    /*navigation link for cursor*/
    
    .nav__link
    {
        display:flex;
    }
    .nav__link:hover
    {
        background-color: snow;
    }

</style>
<!--Navbar Header-->
    <nav class="navbar navbar-expanded-sm bg-primary fixed-top">
        <div class="container-fluid">
        <a href="/pengaturanmahasiswa" data-target="nav-mobile" class="sidenav-trigger show-on-large">
            <div class="nav-wrapper" style="margin-top:1px;">
                <i class="material-icons left md-light nav__link" style="color:white;">arrow_back</i>

                </i>
            </div>
        </a>
            <h2 class="text-left font-weight-bold"><font style="font-size:12pt;color:white;font-family:sans-serif;float:left;margin-top:5pt;">
                Ubah Profil
            </font></h1>
        </div>
    </nav>

<!--Content-->
<br><br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
        <h1><font style="font-family:verdana;font-size:20pt;color:black;margin-top:10pt;">Ubah Profil</font></h1>
    </div>

<div class="container">
        <form class="was-validated" action="{{url('/prosesubahprofilmahasiswa')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Angkatan Mahasiswa :</font></label>
                        <input type="text" placeholder="Masukkan Angkatan" class="form-control col-md-6" value="{{Session::get('angkatan')}}" required disabled>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Status Mahasiswa</font></label>
                        <input type="text" placeholder="Masukkan Status Mahasiswa" class="form-control col-md-6" value="{{Session::get('status_mahasiswa')}}" required disabled>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nama Lengkap  :</font></label>
                    <input type="text" placeholder="Masukkan Nama" name="nama_lengkap" class="form-control col-md-6" value="{{Session::get('nama_lengkap')}}" required disabled>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Jenis Kelamin :</font></label><br>
                    <input type="text"  name="jenis_kelamin" class="form-control col-md-6" value="{{Session::get('nama_lengkap')}}" required disabled>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-row">
                    <div class="col-md-3">
                        <label><font face="verdana" size="3" color="black">Tempat Lahir :</font></label>
                        <input type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" class="form-control" value="{{Session::get('tempat_lahir')}}" required disabled>
                        <div class="valid-feedback">Data Sudah Lengkap.</div>
                        <div class="invalid-feedback">Data Kurang Lengkap.</div>
                    </div>
                    <div class="col-md-3">
                        <label><font face="verdana" size="3" color="black">Tanggal Lahir : </font></label>
                        <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" class="form-control" value="{{Session::get('tanggal_lahir')}}" required disabled>
                        <div class="valid-feedback">Data Sudah Lengkap.</div>
                        <div class="invalid-feedback">Data Kurang Lengkap.</div>
                    </div>
        </div><br>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Alamat :</font></label>
                    <input type="text" placeholder="Masukkan Alamat" name="alamat" class="form-control col-md-6" value="{{Session::get('alamat')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nomor Telepon :</font></label>
                    <input type="text" placeholder="Masukkan No Telepon" name="no_telepon" class="form-control col-md-6" value="{{Session::get('no_telepon')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nomor Handphone :</font></label>
                    <input type="text" placeholder="Masukkan No Handphone" name="no_handphone" class="form-control col-md-6" value="{{Session::get('no_handphone')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Email :</font></label>
                    <input type="text" placeholder="Masukkan Email" name="email" class="form-control col-md-6" value="{{Session::get('email')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Facebook :</font></label>
                    <input type="text" placeholder="Masukkan Nama Akun Facebook" name="facebook" class="form-control col-md-6" value="{{Session::get('facebook')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Twitter :</font></label>
                    <input type="text" placeholder="Masukkan Nama Akun Twitter" name="twitter" class="form-control col-md-6" value="{{Session::get('twitter')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Nim  :</font></label>
                    <input type="text" placeholder="Masukkan NIM" name="nim" class="form-control col-md-6" value="{{Session::get('nim')}}" required disabled>
                    <div style="font-size:10pt;color:black;">NIM Yang Dimasukkan Maksimal 9 Karakter Dengan Angka.</div>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Password :</font></label>
                    <input type="password" placeholder="Masukkan Password" name="password" class="form-control col-md-6" value="{{Session::get('password')}}" required>
                    <div style="font-size:10pt;color:black;">Password Yang Diubah Maksimal 8-12 Karakter Dengan Gabungan Huruf dan Angka.</div>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <div class="form-group">
                    <label><font face="verdana" size="3" color="black">Foto Mahasiswa :</font></label>
                    <input type="file" placeholder="Masukkan Foto" name="image" class="form-control col-md-6" value="{{Session::get('image')}}" required>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
        </div>

        <input type="submit" value="Submit" class="btn btn-info" name="submit">
        <input type="reset" value="Reset" class="btn btn-default" name="reset">
    </form>
    </div>
    @include('sweetalert::alert')
</body>
</html>