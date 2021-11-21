<html>
    <head>
        <title>5Tugas 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <style>
        body {
            font-family:Arial, Helvetica, sans-serif ;
            background-color: aliceblue;
        }
        .container {
            margin : 70px auto ;
            justify-content: center;
            width: 700px;
            background-color: rgb(220, 220, 220);
            padding-left: 80px;
            border-radius: 10px;
        }
        .heading {
            margin-bottom: 20px;
            font-weight:bold;
            margin-left: 220px;
        }
    </style>


    <body>
        <div class="container">
            <h1 class="heading">Hasil</h1>
            <form class="form-horizontal" action="https://www.google.com/">
                <div class="form-group row">
                <?php
                echo "Diketahui panjang " .$_POST["panjang"] ." " .$_POST["satuan"] .", lebar "
                .$_POST["lebar"] ." " .$_POST["satuan"] .", tinggi " .$_POST["tinggi"] ." " .$_POST["satuan"] .". Maka: "
                ;
                ?>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3" for="volume">Volume</label>
                    <label class="col-sm-1" for="volume">:</label>
                    <div class="col-sm-8">
                    <?php
                        $panjang = $_POST["panjang"];
                        $lebar = $_POST["lebar"];
                        $tinggi = $_POST["tinggi"];
                        function volume($panjang, $lebar, $tinggi) {
                            return $panjang * $lebar * $tinggi;
                        }
                        $volumebox = volume($panjang, $lebar, $tinggi)
                    ?>
                    <?php echo $volumebox?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3" for="satuan">Satuan Volume</label>
                    <label class="col-sm-1" for="satuan">:</label>
                    <div class="col-sm-8">
                        <?php
                        $satuanvol = $_POST["satuan"] ;
                        if ($satuanvol == "meter") {
                            echo "meter kubik" ;
                        }
                        else if ($satuanvol == "centimeter"){
                            echo "centimeter kubik" ;
                        }
                        ?>

                    </div>
                </div>

            </form>

        </div>

    </body>

</html>
