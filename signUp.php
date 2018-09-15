 <?php
// define variables and set to empty values
$fname = $lname = $uid = $pwd = $email = $phone = $gender = $address = $dob = "";



if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['submit'])) {

    include_once 'db.php';

    // $fname = test_input($_POST["fname"]);
    // $lname =test_input($_POST["lname"]);
    // $uid =test_input($_POST["username"]);
    // $email =test_input($_POST["email"]);
    // $pwd =test_input($_POST["pwd"]);
    // $address =test_input($_POST["address"]);
    // $gender =test_input($_POST["gender"]);
    // $phone =test_input($_POST["phone"]);
    // $dob = $_POST["dob"];

    //For security purpose

    $fname =mysqli_real_escape_string($conn , $_POST["fname"]);
    $lname =mysqli_real_escape_string($conn , $_POST["lname"]);
    $uid =mysqli_real_escape_string($conn , $_POST["username"]);
    $email =mysqli_real_escape_string($conn , $_POST["email"]);
    $pwd =mysqli_real_escape_string($conn , $_POST["pwd"]);
    $address =mysqli_real_escape_string($conn , $_POST["address"]);
    $gender =mysqli_real_escape_string($conn ,$_POST["gender"]);
    $phone =mysqli_real_escape_string($conn , $_POST["phone"]);
    $dob =mysqli_real_escape_string($conn , $_POST["dob"]);
    $cpwd =mysqli_real_escape_string($conn , $_POST["cpwd"]);

    //error handling
    //Checking For uid
    //     $sql = "SELECT * FROM users WHERE users_id='$uid';";
    //     $result = mysqli_query($conn,$sql);
    //     $resultCheck=mysqli_num_rows($result);
        
    //     if($resultCheck>0){
    //       header("Location : signup.html?signup=usertaken");
    //       exit();
    //     }
    //     else{
    //       //hashing password
    //       $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
    //       //inserting data into database
    //       $sql = "INSERT INTO users(firstname,lastname,users_id,users_email,users_password,users_location,users_phone,users_gender)
    //       VALUES ('$fname','$lname','$uid','$email','$hashedPwd','$address','$phone','$gender');";
    //       $result= mysqli_query($conn,$sql); 
    //       header("Location : signup.html?signup=success");
    //       exit(); 
    //     }

    $summary1 = $summary="";
    if($cpwd!==$pwd){
        $summary="Confirm Password Doesn't Matches !";
        $summary1="Go back and signup carefully";
    }
    else{
    $check=mysqli_query($conn,"select * from users where user_uid='$uid'");
    $checkrows=mysqli_num_rows($check);
    if($checkrows>0){
              $summary="Error User Already Taken !";
              $summary1="Go back and signup again.";
            }
    else{
        //   $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(firstname,lastname,user_email,user_uid,user_pwd,user_location,user_birthday,user_gender,user_phone)
        VALUES ('$fname','$lname','$email','$uid','$pwd','$address','$dob','$gender','$phone');";
        mysqli_query($conn,$sql); 
        $conn->close();
        $summary="THANKS FOR SIGNING UP !";
        $summary1 = $fname . " " . $lname; 
    }
  }
}      

else{
    header("Location : signup.html");
    exit();
   }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// echo "<h2>Your Input:</h2>";
//     echo $fname;
//     echo "<br>";
//     echo $email;
//     echo "<br>";
//     echo $uid;
//     echo "<br>";
//     echo $address;
//     echo "<br>";
//     echo $gender;
//     echo "<br>";
//     echo $pwd;
//     echo "<br>";
//     echo $summary;
//     echo "<br>";
//     echo $summary2;



?>
<html>
  <head>
    <title>Submission</title>
    <link rel="stylesheet" href="styleSign.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="loginBox">
                        <div class="container-fluid text-center">
                            <h1 class="summary"><?php echo $summary; ?></h1>
                            <h2 class="summary1"><?php echo $summary1; ?></h2>
                            <a href="index.php" ><button class="specialButton">Home</button></a>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="col-3"></div>
        </div>
        <!-- end login box -->
  </body>
</html>