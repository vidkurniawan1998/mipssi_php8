<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylsheet"  type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/adminlte.js"></script>
    <script type="text/javascript" src="/js/adminlte.min.js"></script>
    <script type="text/javascript" src="/js/sweetalert.js"></script>
</head>
<body width="100%">
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

    .bulat
    {
        border-radius:30px;
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
<br><br><br>
    <form class="container" action="{{url('/prosesloginmahasiswa')}}" method="post">
        {{ csrf_field() }}
        <img src="itbstikombali.png" style="width:100px;height:100px;margin-left:auto;margin-right:auto;display:block;"> 
        <h1 class="text-center font-weight-bold"><font style="font-face:verdana;color:cornflowerblue;font-size:10pt;">Manajemen Informasi Program Studi Sistem Informasi</font></h1><br>

        <div class="form-group">
            <label><font face="verdana" size="3" color="black">Nim :</font></label>
            <input type="text" placeholder="Masukkan Nim" name="nim" class="form-control" id="nim">
        </div>
        
        <div class="form-group">
            <label><font face="verdana" size="3" color="black">Password : </font></label>
            <input type="password" placeholder="Masukkan Password" name="Password" class="form-control" id="password">
        </div><br>
        <input type="submit" value="Login" name="login" class="btn btn-primary btn-block bulat font-weight-bold">
        <h1 class="container text-center font-weight-bold"><font style="font-family:verdana;font-size:8pt;">
        Prodi Sistem Informasi ITB STIKOM BALI © 2020
        </font></h1>
    </form>
    @include('sweetalert::alert')
    </body>
    </html>
