<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylsheet"  type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="stikombalititle.png" rel="shorcut icon">
    <link rel="shortcut icon" type="text/css" href="/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/navbottom.css">
    <link rel="stylesheet" type="text/css" href="/css/notifbadge.css">
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

    .card-group
    {
        margin-left:25pt;
    }
/*Menu Recycler View*/
    .card-body
    {
        margin-left:-10pt;
    }

/*Bottom Navigation View*/

    .nav__link:hover
    {
        background-color: snow;
    }


   .container
    {
        width:100%;
    }

</style>
            @foreach($pengumuman as $index => $li)
            @endforeach
<!--Navbar Header-->
<nav class="navbar navbar-expanded-sm bg-primary fixed-top">
        <div class="container">
            <div class="icon-bar">
              <img src="stikombaliwhite.png" style="width:30px;height:30px;">
            </div>
            <h2 class="font-weight-bold"><font style="font-size:12pt;color:white;font-family:sans-serif;position:relative;left:40px;">
                MIPSSI
            </font></h1>

             <a href="/notifikasimahasiswa">
                <span class="material-icons" style="color:white;">notifications</span>
                @if($pengumuman->count()!==0)
                <span class="badge" onclick="style.display='none'">{{$pengumuman->count()}}</span>
                @endif
             </a>

        </div>
    </nav>
<br><br>


<!--Menu Recycler View-->
<form class="container">
<a href="/tampilkanpengumuman"><img src="walpaperpengumuman.png" style="width:130px;height:130px;border-radius:15px;margin-left:20pt;margin-top:10pt;"></a>
<a href="/tampilkandokumen"><img src="walpaperdokumen.png" style="width:130px;height:130px;border-radius:15px;margin-left:5pt;margin-top:10pt;"></a><br>
<a href="/tampilkanmahasiswa"><img src="walpapermahasiswa.png" style="width:130px;height:130px;border-radius:15px;margin-left:20pt;margin-top:10pt;"></a>
<a href="/tampilkandosen"><img src="walpaperdosen.png" style="width:130px;height:130px;border-radius:15px;margin-left:5pt;margin-top:10pt;"></a><br>
<a href="/tampilkanstaff"><img src="walpaperstaff.png" style="width:130px;height:130px;border-radius:15px;margin-left:70pt;margin-top:10pt;margin-bottom:5pt;"></a>
<h1 class="container text-center font-weight-bold"><font style="font-family:verdana;font-size:8pt;">
        Prodi Sistem Informasi ITB STIKOM BALI © 2020
        </font></h1>
</form>

<!--Bottom Navigation View-->
    <nav class="nav-bottom-navigation">
        <a href="/homemahasiswa" class="nav__link nav__link--active" style="text-decoration:none;color:blue;">
            <i class="material-icons nav__icon">home</i>
            <span class="nav__text">Halaman Utama</span>
        </a>

        <a href="/profilmahasiswa" class="nav__link" style="text-decoration:none;color:black;">
            <i class="material-icons nav__icon">person</i>
            <span class="nav__text">Profil</span>
        </a>

        <a href="/pengaturanmahasiswa" class="nav__link" style="text-decoration:none;color:black;">
            <i class="material-icons nav__icon">settings</i>
            <span class="nav__text">Pengaturan</span>
        </a>

    </nav>

    @include('sweetalert::alert')
</body>
</html>
