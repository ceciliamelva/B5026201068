<html lang="en">
<head>
    <title>Form Input Data Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    .container {
            margin : 70px auto ;
            justify-content: center;
            width: 700px;
            background-color: rgb(255, 246, 220);
            padding-left: 80px;
            border-radius: 10px;
        }
        .heading {
            margin-bottom: 30px;
            font-weight:bold;
            margin-left: 40px;
        }

</style>

<body>
    <header>Cecilia Melva Natania</header>
    <header>Melva</header>
    <header>5026201068</header>
    <div class="container">
        <h1 class="heading">Form Input Data Barang</h1>
        <form class="form-horizontal" name="regForm" id="regForm" action="https://www.google.com/">

            <div class="form-group row">
                <label class="col-sm-3" for="nama">Nama Barang</label>
                <label class="col-sm-1" for="nama">:</label>
                <div class="col-sm-8">
                    <input type="text" id="nama" name="nama" size="30"  required> <p id="nama_salah"></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="harga">Harga</label>
                <label class="col-sm-1" for="harga">:</label>
                <div class="col-sm-8">
                    <input type="text" id="harga" name="harga" size="30" pattern="[0-9]{4,}" min="5000" title="Hanya angka; minimal 5000." required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="jenis">Jenis</label>
                <label class="col-sm-1" for="jenis">:</label>
                <div class="col-sm-8">
                    <select id="jenis" name="jenis" required>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="nonmamin">NON mamin</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="barcode">Kode Barcode</label>
                <label class="col-sm-1" for="barcode">:</label>
                <div class="col-sm-8">
                    <input type="text" id="barcode" name="barcode" pattern="[0-9]{10,}" title="Hanya angka; minimal 10 digit" required size="30">
                </div>
            </div>


            <div class="form-group row">
                <div class="col">
                    <center><button type="submit" class="btn btn-primary submit">Kirim</button></center>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-primary reset">Reset</button>
                </div>
            </div>

        </form>

    </div>

    <script>
        $( document ).ready(function() {
            $(".submit").click(function(){


                /* nama*/
            var nama = $("#nama").val();
            if(nama.length<10){
                $("#nama").css({'border' : '2px solid red'})
                $("#nama_salah").text('Nama minimum 10 karakter');
                return false;
            }
            else if(nama.length>=10){
                $("#nama").css({'border' : '2px solid lightgreen'});
                $("#nama_salah").text('');

            }


        });
            });






        </script>
</body>

</html>
