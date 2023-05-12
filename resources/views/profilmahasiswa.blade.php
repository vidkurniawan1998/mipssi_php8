<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profil Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylsheet"  type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

/*Box Profile*/
.box
    {
        border: 15px;
        padding: 100px;
        background-image:linear-gradient(-50deg, #0000FF, #FFFF00, #FF0000);
        animation: bg-color 5s infinite alternate;
        overflow:hidden;
    }

    .dot 
    {
        height: 250px;
        width: 250px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        position:absolute;
        margin-left:-35pt;
        margin-top:-30pt;
    }
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

<!--Box Profile-->
<div class="box">
    <img src="{{asset('uploads/mahasiswa/'. Session::get('image'))}}" class="dot" width="50px auto" height="50px auto">
</div>

<!--Content-->
<div class="container">
    <h1 style="margin-top:80pt;margin-bottom:50pt;text-align:center;">{{Session::get('nama_lengkap')}}</h1>
    <h1 style="font-size:14pt;font-style:bold;font-family:sans-serif;">Data Pribadi  </h1><br>
    
    <!--Detail Data Pribadi-->
    <p style="font-size:12pt;font-family:sans-serif;"><b>NIM </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('nim')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Status </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('status_mahasiswa')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Angkatan </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('angkatan')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Jenis Kelamin</b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('jenis_kelamin')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Tempat Tanggal Lahir </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('tempat_lahir')}} , {{Session::get('tanggal_lahir')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Alamat </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('alamat')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Nomor Telepon </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('no_telepon')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Nomor Handphone </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('no_handphone')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Facebook </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('facebook')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Twitter </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('twitter')}}</p>

    <p style="font-size:12pt;font-family:sans-serif;"><b>Email </b></p>
    <p style="font-size:10pt;font-family:sans-serif;color:gray;">{{Session::get('email')}}</p><br>
</div>

<!--Bottom Navigation View-->
    <nav class="nav-bottom-navigation">
        <a href="/homemahasiswa" class="nav__link" style="text-decoration:none;color:black;">
            <i class="material-icons nav__icon">home</i>
            <span class="nav__text">Halaman Utama</span>
        </a>

        <a href="/profilmahasiswa" class="nav__link nav__link--active" style="text-decoration:none;color:#0062cc;">
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