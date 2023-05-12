<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href="stikombalititle.png" rel="shorcut icon">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
</head>
<body>

<!--Memanggil Fungsi Css Dari Blade CssRegister Yang Ada Di Folder Layouts-->
@include('layouts.cssregister')

<!--Memanggil Header Dari Blade HeaderRegister Yang Ada Di Folder Layouts-->
@include('layouts.headerregister')

 @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

<!--Content-->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
        <h1><font style="font-family:verdana;font-size:20pt;color:black;">Register Admin</font></h1>
    </div>

    <div class="container">
        <form class="was-validated" action="{{url('register/prosesregister')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Nama Lengkap :</font></label>
                <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control col-md-6" name="nama_lengkap" required>
                <div class="valid-feedback">Data Sudah Lengkap.</div>
                <div class="invalid-feedback">Data Kurang Lengkap.</div>
                <div></div>
            </div>

            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Jabatan :</font></label>
                    <select name="jabatan" class="form-control col-md-6" required>
                        <option value="">Pilih Jabatan</option>
                        <option value="Ketua Program Studi Sistem Informasi">Ketua Program Studi Sistem Informasi</option>
                        <option value="Sekertaris Program Studi Sistem Informasi">Sekertaris Program Studi Sistem Informasi</option>
                        <option value="Staff Program Studi Sistem Informasi">Staff Program Studi Sistem Informasi</option>
                    </select>
                    <div class="valid-feedback">Data Sudah Lengkap.</div>
                    <div class="invalid-feedback">Data Kurang Lengkap.</div>
            </div>

            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Email :</font></label>
                <input type="text" placeholder="Masukkan Email" class="form-control col-md-6" name="email" required>
                <div class="valid-feedback">Data Sudah Lengkap.</div>
                <div class="invalid-feedback">Data Kurang Lengkap.</div>
            </div>

            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Username :</font></label>
                <input type="text" placeholder="Masukkan Username" class="form-control col-md-6" name="username" required>
                <div style="font-size:10pt;color:black;">Username Yang Dimasukkan Maksimal 8-10 Karakter Dengan Gabungan Huruf Dan Angka.</div>
                <div class="valid-feedback">Data Sudah Lengkap.</div>
                <div class="invalid-feedback">Data Kurang Lengkap</div>
            </div>

            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Password :</font></label>
                <input type="password" placeholder="Masukkan Password" class="form-control col-md-6" name="password" required>
                <div style="font-size:10pt;color:black;">Password Yang Dimasukkan Maksimal 8-12 Karakter Dengan Gabungan Huruf dan Angka.</div>
                <div class="valid-feedback">Data Sudah Lengkap.</div>
                <div class="invalid-feedback">Data Kurang Lengkap</div>
            </div>

            <div class="form-group">
                <label><font face="verdana" size="3" color="black">Foto :</font></label>
                <input type="file" placeholder="Masukkan Foto Admin" class="form-control col-md-6" name="image" required>
                <div class="valid-feedback">Data Sudah Lengkap.</div>
                <div class="invalid-feedback">Data Kurang Lengkap.</div>
            </div>

            <input type="submit" value="Submit" name="submit" class="btn btn-info">
            <input type="reset" value="Reset" name="reset" class="btn btn-default">
        </form>
    </div>

<!--Memanggil Footer Dari Blade Footer Yang Ada Di Folder Layouts-->
@include('layouts.footer')

@include('sweetalert::alert')

</body>
</html>


