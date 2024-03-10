<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/w3.css">
<link rel="stylesheet" href="CSS/w3-colors-win8.css">
<link rel="stylesheet" href="CSS/w3-colors-flat.css">
    
<link rel="stylesheet" href="intlInputPhone.min.css">

    <!-- link for bootstrap style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     <!-- link for jquery style -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="assets/js/geodatasource-cr.min.js"></script>
    <link rel="stylesheet" href="assets/css/geodatasource-countryflag.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Strait|Chonburi">

    <!-- link to eng language po file -->
    <link rel="gettext" type="application/x-po" href="languages/en/LC_MESSAGES/en.po" />
    <script type="text/javascript" src="assets/js/Gettext.js"></script>

    <style type="text/css">
        .ui-selectmenu-button.ui-button {
            font-family: Verdana;
            width: 100%; 
            background-color: white;
        }

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

        .submit-button {
          background-color: black;
        }
    </style>

    <script type="text/javascript">




    $(document).ready(function() {
        $("#gds-cr-one").on('change',function() {
            $("#display").html("You have selected " + $("#countrySelection").children("option").filter(":selected").text() + " > " + $(this).children("option").filter(":selected").text());
            jQuery("#country_h").val($("#countrySelection").children("option").filter(":selected").text());
            jQuery("#region_h").val($(this).children("option").filter(":selected").text());
        });
    });
    </script>

    

<title>Registration Form</title>
</head>
<body class="w3-flat-clouds">
<div class="container w3-win8-steel w3-center w3-padding-small">
        <h1 class="w3-xxlarge"><b>REGISTER</b></h1>
    </div><br>
    <div class="container w3-win8-steel">

    <?php
  // Check if the form is submitted
  if(isset($_POST["submit"])){

    $LastName = $_POST["LastName"];
    $FirstName = $_POST["FirstName"];
    $email = $_POST["Email"];
    $password = $_POST["password"];
    $RepeatPassword = $_POST["repeat_password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $lotblk = $_POST["Lot/Blk"];
    $street = $_POST["Street"];
    $phasesubd = $_POST["Phase/Subdivision"];
    $Barangay = $_POST["Barangay"];
    $country = $_POST["Country"];
    $region = $_POST["Region"];
    $num = $_POST["phoneNumber"];
    $city = $_POST["City"];
    $errors = array();

        // Validate if all fields are empty
        if (empty($LastName) OR empty($FirstName) OR empty($email) OR empty($password) OR empty($RepeatPassword) OR empty($lotblk) OR empty($street) OR empty($phasesubd) OR empty($Barangay) OR empty($country) OR empty($region) OR empty($num) OR empty("$city")) {
        array_push($errors, "All fields are required");
        }

        // Validate if the email is not validated
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
        }

        // Password should not be less than  8
        if(strlen($password) <  8) {
        array_push($errors, "Password must be at least  8 characters long");
        }

        // Check if password is the same
        if ($password != $RepeatPassword) {
        array_push($errors, "Password does not match");
        }

        require_once "database.php";
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0){
          array_push($errors, "Email Already Exists!");
        }

        if (count($errors) >  0) {
        foreach($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }

        } else {
        // Insert to database
          require_once "database.php";
          $sql = "INSERT INTO tbl_user (USER_FNAME, USER_LNAME, USER_EMAIL, USER_PASSWORD, USER_COUNTRY, USER_REGION, USER_STREET, USER_SUBDIVISION, USER_BARANGGAY, USER_CITY, USER_CONTACT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
          $stmt = mysqli_stmt_init($conn); //initializes a statement and returns an object suitable for mysqli_stmt_prepare()
          $preparestmt = mysqli_stmt_prepare($stmt, $sql);

          if ($preparestmt){
          mysqli_stmt_bind_param($stmt, "sssssssssss", $LastName, $FirstName, $email, $passwordHash, $country, $region, $street, $phasesubd, $Barangay, $city, $num  );
          mysqli_stmt_execute($stmt);
          echo "<div class = 'alert alert-success'> You are Registered Successfully! </div>";
          } else {
          die("Something went wrong!");
          }
        }
    }
?>

    <!-- Registration Form -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <h4><b>Full Name</b></h4>
    <div class="form-group">
    <input type="text" class="form-control" name="LastName" placeholder="Last Name">
    </div>

    <div class="form-group ">
    <input type="text" class="form-control" name="FirstName" placeholder="First Name">
    </div>

    <br><h4><b>Address</b></h4>
    <div class="form-group">
    <input type="text" class="form-control" name="Lot/Blk" placeholder="Lot/Block">
    </div>

    <div class="form-group">
    <input type="text" class="form-control" name="Street" placeholder="Street">
    </div>

    <div class="form-group">
    <input type="text" class="form-control" name="Phase/Subdivision" placeholder="Phase/Subdivision">
    </div>

    <div class="form-group">
    <input type="text" class="form-control" name="Barangay" placeholder="Barangay">
    </div>
    
    <div class="form-group">
    <input type="text" class="form-control" name="City" placeholder="City">
    </div>

    <div class="form-group w3-large w3-white">
    <select class="form-control gds-cr gds-countryflag" id="countrySelection" country-data-region-id="gds-cr-one" data-language="en" name="Country"></select>
    </div>

    <div class="form-group">
    <select class="form-control" id="gds-cr-one" name="Region"></select>
    </div>
    




    <br><h4><b>Contact Information</b></h4>
    <div class="form-group" >
    <div class="input-phone"></div>
    </div>







    <div class="form-group">
    <input type="email" class="form-control" name="Email" placeholder="Email">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" name="submit" value="Register">
    </div>
    </form>

    <div><p> Already Registered? <a href="login.php" style="color:black"> <b>Login Here!</b> </a></p></div>
    </div>
  

    
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="intlInputPhone.min.js"></script> 

    <script type="text/javascript">

        $('.input-phone').intlInputPhone();

    </script>



   
 
</body>
</html>