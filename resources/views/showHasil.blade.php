<html>
    <head>
        <title>Tugas 4</title>
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
            background-color: rgb(202, 202, 202);
            padding-left: 50px;
            border-radius: 10px;
        }
        .heading {
            margin-bottom: 30px;
            font-weight:bold;
            margin-left: 150px;
        }


    </style>


    <body>
        <div class="container">
            <h1 class="heading">Hitung Volume Box</h1>
            <form class="form-horizontal" method="post" action="math">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-3" for="panjang">Panjang</label>
                    <label class="col-sm-1" for="panjang">:</label>
                    <div class="col-sm-8">
                        <input type="text" class="panjang" name="panjang" size="30" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3" for="lebar">Lebar</label>
                    <label class="col-sm-1" for="lebar">:</label>
                    <div class="col-sm-8">
                        <input type="text" class="lebar" name="lebar" size="30" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3" for="tinggi">Tinggi</label>
                    <label class="col-sm-1" for="tinggi">:</label>
                    <div class="col-sm-8">
                        <input type="text" class="tinggi" name="tinggi" size="30" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3" for="satuan">Satuan:</label>
                    <label class="col-sm-1" for="satuan">:</label>
                    <div class="col-sm-8">
                        <select id="satuan" name="satuan" required>
                            <option value="meter">meter</option>
                            <option value="centimeter">centimeter</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <center>
                        <button type="submit" class="btn btn-primary kirim">Kirim</button>
                    </center>
                </div>

            </form>

        </div>

    </body>

</html>
