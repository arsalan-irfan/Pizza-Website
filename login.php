<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['submit'])) {

    include_once 'db.php';
    $uid = mysqli_real_escape_string($conn,$_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);
    //Error handling
    $sql="SELECT * FROM users where user_uid='$uid'";
    $check=mysqli_query($conn,$sql);
    $checkrows=mysqli_num_rows($check);
    if($checkrows<1){
        header("Location: signIn.php?login=error");
        exit();
    }
    else{
        if($row = mysqli_fetch_assoc($check)){
            //De-hashing password
            // $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
            // if($hashedPwdCheck == false)
            if($pwd!==$row['user_pwd']){
                header("Location: index.php?login=fail");
                // echo "<script>windows.location.assign('signIn.php');alert('login Unsuccessful');</script>";
                exit;
            }
            else{
                $_SESSION['u_id'] = $row['user_uid'];
                $_SESSION['u_fname'] = $row['firstname'];
                $_SESSION['u_lname'] = $row['lastname'];
                $_SESSION['u_pwd'] = $row['user_pwd'];
                $_SESSION['u_loc'] = $row['user_location'];
                $_SESSION['u_dob'] = $row['user_birthday'];
                $_SESSION['u_gender'] = $row['user_gender'];
                $_SESSION['u_phone'] = $row['user_phone'];
                $_SESSION['u_email'] = $row['user_email'];
                header("Location: index.php?login=success");
                exit();
                $conn->close();
            }
        }
    }    
}
?>