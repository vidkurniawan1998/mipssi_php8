<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengaturan Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylsheet"  type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="text/css" href="/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/navbottom.css">
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

    .container
    {
        width:100%;
    }
</style>

<!--Navbar Header-->
<nav class="navbar navbar-expanded-sm bg-primary fixed-top table-responsive">
        <div class="container">
            <div class="icon-bar">
              <img src="stikombaliwhite.png" style="width:30px;height:30px;">
            </div>
            <h2 class="container font-weight-bold"><font style="font-size:12pt;color:white;font-family:sans-serif;position:relative;left:40px;">
                MIPSSI
            </font></h1>
        </div>
    </nav>
<br>

<!--Content-->
<ul class="list-group" style="margin-top:16pt;">
    <li class="list-group-item list-group-item-dark"><b>Akun</b></li>
    <li class="list-group-item">
        <a href="/logoutmahasiswa" style="text-decoration:none;color:black;">
            <i class="fa fa-sign-out"></i>Keluar
            <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
        </a>
    </li>
</ul>

<ul class="list-group">
    <li class="list-group-item list-group-item-dark"><b>Tentang</b></li>
    <li class="list-group-item">
        <a href="/kebijakanprivasi" style="text-decoration:none;color:black;">
            <i class="fa fa-shield"></i>Kebijakan Privasi
            <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
        </a>
    </li>
</ul>

<!--Bottom Navigation View-->
    <nav class="nav-bottom-navigation">
        <a href="/homemahasiswa" class="nav__link" style="text-decoration:none;color:black;">
            <i class="material-icons nav__icon">home</i>
            <span class="nav__text">Halaman Utama</span>
        </a>

        <a href="/profilmahasiswa" class="nav__link" style="text-decoration:none;color:black;">
            <i class="material-icons nav__icon">person</i>
            <span class="nav__text">Profil</span>
        </a>

        <a href="/pengaturanmahasiswa" class="nav__link nav__link--active" style="text-decoration:none;color:#0062cc;">
            <i class="material-icons nav__icon">settings</i>
            <span class="nav__text">Pengaturan</span>
        </a>
    </nav>
</body>
</html>