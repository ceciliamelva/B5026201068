<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    body {
            font-family:Arial, Helvetica, sans-serif ;
            background-image: url("https://c4.wallpaperflare.com/wallpaper/933/409/88/marmalade-sugar-candy-background-wallpaper-preview.jpg") ;
            background-repeat: no-repeat;
            background-size: 500mm;
        }
        .container {
            align-items: right;
            justify-content: right;
            width: 700px;
            background-color: rgb(255, 246, 220);
            padding-left: 80px;
            border-radius: 10px;
            margin : 70px auto ;
        }
        .heading {
            margin-bottom: 30px;
            font-weight:bold;
            margin-left: 120px;
        }
        #userid_salah { color: red}
        #password_salah { color: red}
        #nama_salah { color: red}
        #email_salah { color: red}
        #sex_kosong { color: red}
        #language_kosong { color: red}
        #err { color: red}

</style>

<body>
    <div class="container">
        <h1 class="heading">Registration Form</h1>
        <form class="form-horizontal" name="regForm" id="regForm" action="https://www.google.com/">

            <div class="form-group row">
                <label class="col-sm-2" for="userid">User id:</label>
                <div class="col-sm-10">
                    <input type="text" id="userid" name="userid" size="30"  required> <p id="userid_salah"></p>
                </div>
            </div>

            <div class="form-group row">
                    <label class="col-sm-2" for="password">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" name="password" size="30" required> <p id="password_salah"></p>
                    </div>
                </div>

            <div class="form-group row">
                <label class="col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" size="30" required> <p id="nama_salah"></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                    <input type="text" id="address" name="address" size="30">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="country">Country:</label>
                <div class="col-sm-10">
                    <select id="country" name="country" required>
                        <option>(Please select a country)</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="canada">Singapur</option>
                        <option value="usa">USA</option>
                        <option value="canada">Malaysia</option>
                        <option value="usa">Taiwan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="zipcode">Zip Code:</label>
                <div class="col-sm-10">
                    <input type="text" id="zipcode" name="zipcode" pattern="[0-9].{0,}" title="Numeric only, more than two digit" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email" size="50"  required> <p id="email_salah"></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="sex">Sex:</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="gender" required>Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender">Female
                    </label>
                </div>
                <p id="sex_kosong"></p>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="language">Language:</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="english">English
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="nonenglish">Non English
                    </label>
                </div>
                <p id="language_kosong"></p>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="about">About:</label>
                <div class="col-sm-10">
                    <input type="message" id="about" name="about" size="50" style="height:200px;">
                </div>
            </div>

            <div class="form-group">
                <div>
                    <center><button type="submit" class="btn btn-primary submit">Submit</button></center>
                </div>

            </div>

        </form>

    </div>

    <script>
        $( document ).ready(function() {

            $(".err").hide();
            $(".submit").click(function(){


            /*nama*/
            var userid = $("#userid").val();
            if(userid.length<5 || userid.length>12) {
                $("#userid").css({'border' : '2px solid red'})
                $("#userid_salah").text('User id minimum 5 karakter dan maksimum 12 karakter');
                return false;
            }
            else if(userid.length>=5 || userid.length<=12){
                $("#userid").css({'border' : '1px solid black'});
                $("#userid_salah").text('');

            }


            /*password*/
            var password = $("#password").val();
            if(password.length<7 || password.length>12){
                $("#password").css({'border' : '2px solid red'})
                $("#password_salah").text('Password minimum 7 karakter dan maksimum 12 karakter');
                return false;
            }
            else if(password.length>=7 || password.length<=12){
                $("#password").css({'border' : '2px solid black'});
                $("#password_salah").text('');

            }


            /*name*/
            var name = $('#name').val();
            var namevalid = /^[a-zA-Z\s]+$/
            if(!name.match(namevalid) || name.length <= 0) {
                $("#name").css({'border': '2px solid red'})
                $("#nama_salah").text('Nama hanya diperbolehkan alphabet')
                    return false;
            }

            if(name.match(namevalid)){
                $("#name").css({'border': '1px solid black'})
                $("#nama_salah").text('')
            }


            /*email*/
            var email = $('#email').val()
            var emailvalid = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/

            if(!email.match(emailvalid) || name.length <= 0)

                    {
                    $("#email").css({'border' : '2px solid red'})
                    $("#email_salah").text('Harus email yang valid')
                    return false;
                }


            if(name.match(namevalid)){
                    $("#email").css({'border' : '1px solid black'})
                    $("#email_salah").text('')
                }


             /*sex*/
            var sex= $("input[type='radio']:checked")
            if(sex.length == 0) {
                $("#sex").css({'border' : '2px solid red'})
                $("#sex_kosong").text('Harus isi jenis kelamin')
                    return false;
                }


            if(sex.length != 0){
                $("#sex").css({'border' : '1px solid black'})
                $("sex_false").text('')
                }

            /*language*/
            var language= $("input[type='checkbox']:checked")
            if(language.length == 0)

                    {
                    $("#language").css({'border' : '2px solid red'})
                    $("#language_kosong").text('Harus pilih bahasa')
                    return false;
                }


            if(language.length != 0){
                    $("#language").css({'border' : '1px solid black'})
                    $("language_kosong").text('')
                }


        });
            });






        </script>
</body>

</html>
