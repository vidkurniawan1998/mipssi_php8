<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengumuman - ITB STIKOM BALI</title>
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

    /*navigation link for cursor*/
    .nav__link:hover
    {
        background-color: snow;
    }

</style>
<!--Navbar Header-->
<nav class="navbar navbar-expanded-sm bg-primary fixed-top">
        <div class="container">
        <a href="/homemahasiswa" data-target="nav-mobile" class="sidenav-trigger show-on-large">
            <div class="nav-wrapper">
                <i class="material-icons left nav__link" style="color:white;margin-top:6pt;">arrow_back</i>
            </div>
        </a>
            <h2 class="text-left font-weight-bold"><font style="font-size:12pt;color:white;font-family:sans-serif;left:5px;">
                Pengumuman
            </font></h1>
        </div>
    </nav>

<!--Content (Isi)-->
<br><br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
        <h1><font style="font-family:verdana;font-size:20pt;color:black;margin-top:10pt;">Pengumuman</font></h1>
    </div>

    <div class="container">
        <form class="form-inline" action="/pilihangkatanandroid" method="get" style="float:left; padding-right:10px;">
        <label class="mr-sm-2"><font style="font-family:verdana;font-size:12pt;color:black;">Angkatan:</font></label>
                <select class="form-control btn-outline-primary dropdown-toggle" name="angkatan" style="width:100%;height:100%;">
                    <option value="">Pilih Angkatan Mahasiswa</option>
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
        
        <form class="form-inline" style="float:left;" action="/caripengumumanandroid" method="get">            
            <label class="mr-sm-2"><font style="font-family:verdana;font-size:12pt;color:black;">Cari:</font></label>
                <input type="search" class="form-control" placeholder="Cari...." name="cari" style="width:100%;height:100%;">
                <button type="submit" class="btn btn-outline-primary mb-2">Cari</button><br>
        </form>
        
        <form class="table-responsive" style="float:left;">            
            <label class="mr-sm-2"><font style="font-family:verdana;font-size:12pt;color:black;">Jumlah Pengumuman : {{$pengumuman->count()}}</font></label>
        </form>
        @if(count($pengumuman) > 0)
        @foreach($pengumuman as $index => $li)
        <div class="table-responsive">
        <div class="card" style="max-width: 540px;">
                <div class="col-md-4">
			        <img src="{{asset('uploads/pengumuman/'. $li->image)}}" width="100%" height="100%" alt="image" onerror="this.src='uploads/pengumuman/logo pdf.jpg'">
                </div>
			<div class="card-body">
				<h5>{{$li->judul_pengumuman}}</h5>
				<p>Judul Pengumuman : {{$li->angkatan}}</p>
				<p>Deskripsi : {{$li->deskripsi}}</p>
                <p>Tanggal : {{$li->tanggal_pengumuman}}</p>
                <form action="{{url('/unduhpengumuman/prosesunduhpengumuman')}}" method="post" enctype="multipart/form-data">
                <a href="{{asset('uploads/pengumuman/'. $li->image)}}" class="btn btn-success" download style="float:right;"><span class="fa fa-download"></span>Unduh</a>
                </form>
			</div>
		</div>
        </div>
@endforeach
@else
<div class="table-responsive">
        <div class="card" style="max-width: 540px;">
			<div class="card-body">
				<p style="font-family:sans-serif;font-size:14pt;"><center><b>Pengumuman Tidak Ditemukan</b></center></p>
			</div>
		</div>
        </div>
@endif
        <br><br>
@include('sweetalert::alert')
    </div>
</body>
</html>