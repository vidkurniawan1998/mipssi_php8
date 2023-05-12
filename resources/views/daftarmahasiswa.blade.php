<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mengelola Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="stikombalititle.png" rel="shorcut icon">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
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
            <img src="stikombaliwhite.png" alt="logo" style="width:40px">
            <h2 class="text-left font-weight-bold"><font face="sans-serif" size="6" color="white">
                MIPSSI
            </font></h1>
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
                                <span class="sr-only">(current)</span></a>
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
                            <a class="nav-link" href="#"><span class="fas fa-user"></span>
                                Mahasiswa
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link" href="tambahmahasiswa"><span class="fa fa-plus"></span>
                                        Tambah Mahasiswa
                                    </a>
                                    <a class="nav-link active" href="daftarmahasiswa"><span class="fas fa-user"></span>
                                        Mengelola Mahasiswa
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fas fa-user-graduate"></span>
                                Dosen
                            <span class="fas fa-angle-down" style="float:right;"></span></a>
                                <ul class="nav nav-treeview">
                                    <a class="nav-link" href="tambahdosen"><span class="fa fa-plus"></span>
                                        Tambah Dosen
                                    </a>
                                    <a class="nav-link" href="daftardosen"><span class="fas fa-user-graduate"></span>
                                        Mengelola Dosen
                                    </a>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="jumlahaksesbilitas"><span class="fas fa-chart-line"></span>
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1><font style="font-family:verdana;font-size:20pt;color:black;">
            Mengelola Mahasiswa
            </font></h1>
        </div>

        <form class="form-inline" action="/pilihangkatandua" method="get" style="float:left; padding-right:10px;">
        <label class="mr-sm-2"><font style="font-family:verdana;font-size:12pt;color:black;">Angkatan:</font></label>
                <select class="form-control mb-2 mr-sm-2 btn btn-sm btn-outline-primary dropdown-toggle" name="angkatan">
                    <option value="">Pilih Angkatan</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                </select>
                <button type="submit" class="btn btn-outline-primary mb-2">Filter</button>
        </form>

        <form class="form-inline" style="float:right;" action="/carimahasiswa" method="get" style="float:left;">
            <label class="mr-sm-2"><font style="font-family:verdana;font-size:12pt;color:black;">Cari:</font></label>
                <input type="search" class="form-control mb-2 mr-sm-2" placeholder="Cari...." name="cari">
                <button type="submit" class="btn btn-outline-primary mb-2">Cari</button>
        </form>

        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr class="table-primary text-light">
                <th><center>No</center></th>
                <th><center>Nama</center></th>
                <th><center>Angkatan</center></th>
                <th><center>Status</center></th>
                <th><center>Jenis Kelamin</center></th>
                <th><center>Foto Mahasiswa</center></th>
                <th colspan="2"><center>Aksi</center></th>
            </tr>

            @if(count($mahasiswa) > 0)
            @foreach($mahasiswa as $index => $li)
            <tr class="table-light text-dark">
                <td>{{$mahasiswa->firstitem() + $index}}</td>
                <td>{{$li->nama_lengkap}}</td>
                <td>{{$li->angkatan}}</td>
                <td>{{$li->status_mahasiswa}}</td>
                <td>{{$li->jenis_kelamin}}</td>
                <td><img src="{{asset('uploads/mahasiswa/'. $li->image)}}" width="100px" height="100px" alt="image"></td>
                <td>
                    <a href="/editmahasiswa/{{$li->id}}" class="btn btn-primary"><span class="fa fa-edit"></span>Ubah</a>
                    <a href="/hapusmahasiswa/{{$li->id}}" class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data Ini?');"><span class="fa fa-trash"></span>Hapus</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7"><center><b>Data Mahasiswa Tidak Ditemukan</b></center></td>
            </tr>
            @endif
        </table>
        </div>
        Jumlah Data : {{$mahasiswa->count()}} dari {{$mahasiswa->total()}}
        <br>
        {{ $mahasiswa->links() }}
        @include('sweetalert::alert')
</body>
</html>
