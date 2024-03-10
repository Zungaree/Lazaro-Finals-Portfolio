<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/w3.css">
    <link rel="stylesheet" href="CSS/w3-colors-win8.css">
    <link rel="stylesheet" href="CSS/w3-colors-flat.css">
    <style type="text/css">
        body{
            padding: 50px;
            font-family: Verdana;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
        }
        #myBtn {
        position: fixed;
        upper: 20px;
        left: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #00aba9;
        color: white;
        cursor: pointer;
        padding: 15px;
        font-size: 30px;
        width: 75px;
        height: 75px;
        border-radius: 25px;
    }

#myBtn:hover {
  	background-color: #00aba9;
}
    </style>

    <title>Login Page</title>
</head>

<body class="w3-flat-clouds">
<a href="index.php"><button id="myBtn"><i class="fa fa-arrow-left"></i></button></a>
    <div class="container w3-win8-steel w3-center w3-padding-small">
        <h1 class="w3-xxlarge"><b>LOGIN</b></h1>
    </div><br>
    <div class="container w3-win8-steel">
        <?php
            session_start();
            if(isset($_POST["login"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL='$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if($user){
                    if(password_verify($password, $user["USER_PASSWORD"])){
                        // Store user information in session
                        $_SESSION["user"] = "yes";
                        $_SESSION["first_name"] = $user["USER_FNAME"];
                        $_SESSION["last_name"] = $user["USER_LNAME"];
                        header("Location: index.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger'> Password does not match! </div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'> Email does not match </div>";
                }
                
            }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form><br>
        <div><p>Not Registered yet? <a href="registration.php" style="color:black"> Register Here</a></p></div>
        
            
    </div>   
   
</body>
</html>
