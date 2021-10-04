<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Aplikasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
    <h4>LOGIN FORM</h4>
        <form action="login-proses.php" method="POST">
            <DIV class="form-group">
                <label for="username">username :</label>
                <input type="text" class="form-control" id="Username" name="Username" required autofocus="" placeholder="Masukan Username">
            </DIV>

            <div class="form-group">
                <label for="password">password :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                <input type="checkbox" onclick="myFunction()">Show password
            </div>

            <button type="Submit" class="btn btn-success" name="login">Login</button>    
    
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
    function myFunction() {
        var x = document.getElementById("password");
        if(x.type === "password"){
            x.type = "text";
        } else {
            x.type = "password";
        }

    }
    </script>

</body>
</html>