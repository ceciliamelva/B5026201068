<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<style>
    body {
        background-color: #f1f1f1;
    }
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(1, 0, 78);
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 20px;
    }
    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidebar a:hover {
        color: #f1f1f1;
    }
    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: rgb(1, 0, 78);
        color: white;
        padding: 10px 15px;
        border: none;
    }
    .openbtn:hover {
        background-color: #444;
    }


    .navbar {
        overflow: hidden;
        background-color: rgb(1, 0, 78);
        position: fixed;
        left:0;
        top: 0;
        width: 100%;
        height: 10%;
    }
    .navbar button {
        float: left;
        color: #ddd;
        padding: 15px;
        font-size: 20px;
        text-align: center;
    }
    .navbar p {
        float: right;
        color: #ddd;
        padding: 15px 30px;
        font-size: 17px;
        text-align: center;
    }
    .navbar img{
        float: right;
        color: #ddd;
        padding-bottom: 3px;
        padding-right: 15px;
        text-align: center;
    }
    .navbar a:hover {
        background: #ddd;
        color: black;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 4%;
        color: #000000;
        background-color: #f1eded;
        text-align: center;
    }
    .heading{
        text-align: center;
        color: #f1f1f1;
    }
    #main {
        transition: margin-left 0.5s;
        margin-top: 50px;
        padding: 10px;
    }

</style>
</head>

<body class="container m-4">

    <nav class="navbar">
        <button class="openbtn" onclick="openNav()">☰ Menu</button>
        <img src="/pasfoto/PAS FOTO MELVA.jpeg" alt="Foto Melva" style="width:60px;height:60px;">
        <p>Cecilia Melva Natania - 5026201068</p>
    </nav>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <h4 class="heading">Tugas PWEB B</h4><hr>
        <a class="nav-link" href="/pegawai" style="color: rgb(255, 255, 255);">Pegawai</a>
        <a class="nav-link" href="/absen" style="color: rgb(255, 255, 255);">Absen</a>
        <a class="nav-link" href="/mutasi" style="color: rgb(255, 255, 255);">Mutasi</a>
        <a class="nav-link" href="/dvd" style="color: rgb(255, 255, 255);">DVD</a>
    </div>

    <div id="main">
        <h3>@yield('judulhalaman')</h3>
        @section('isikonten')
        @show
    </div>

    <div class="footer">
        <p>&copy; Hak Cipta oleh Cecilia Melva Natania - 5026201068</p>
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>

</body>
</html>

