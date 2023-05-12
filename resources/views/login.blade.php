<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MIPSSI - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link href="stikombalititle.png" rel="shorcut icon">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/sweetalert.js"></script>
</head>
<body>
<!--Memanggil Fungsi CSS Dari Blade BeforeLogin Yang Ada Di Folder Layouts-->
@include('layouts.csslogin')

<!--Memanggil Header Dari Blade HeaderLogin Yang Ada Di Folder Layouts-->
@include('layouts.headerlogin')

     <form class="form-login" action="{{url('/proseslogin')}}" method="post">
        {{ csrf_field() }}
        <h1 class="text-center font-weight-bold"><font face="sans-serif" size="6" color="cornflowerblue">Admin Login</font></h1>
        <div class="form-group">
            <label><font face="verdana" size="3" color="black">Username :</font></label>
            <input type="text" placeholder="Masukkan Username Anda" name="username" class="form-control" id="username">
        </div>

        <div class="form-group">
            <label><font face="verdana" size="3" color="black">Password</font></label>
            <input type="password" placeholder="Masukkan Password Anda" name="Password" class="form-control" id="password">
        </div><br>
        <input type="submit" value="Login" name="login" class="btn btn-primary btn-block">
    </form>

<!--Memanggil Footer Dari BladeFooter Yang Ada Di Folder Layouts-->
@include('layouts.footer')

@include('sweetalert::alert')
</body>
</html>
