<?php
session_start();
?>

<html>
    <head>
    <title>Secure Form</title>
    <link rel="stylesheet" href="styleAssignment.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
        
    </style>
    </head>
    <body>
    <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
          <!-- Navigation -->
          <!-- <div id="app" class="container-fluid"> -->
            <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
                <img src="pizzaImage/brand.jpg" class="navbar-brand" alt="pic" width="100px" height="80px"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="ClassTask.php">Class tasks</a>
                        </li>
        
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           <h4><b>
                                <?php
                                    if(isset($_SESSION['u_id'])){
                                        echo $_SESSION['u_id'];
                                    }
                                    else{
                                        echo "";
                                    }
                                ?></b>
                           </h4>     
                        </li>
                        <li class="nav-item">
                            <?php
                                if(isset($_SESSION['u_id'])){
                                    echo '<form action="logout.php" method="POST">
                                    <input type="submit" value="logout" class="specialButton">
                                    </form>';
                                }
                                else{
                                    echo '<a href="signIn.php"> <button class="specialButton">Order Online</button></a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </nav> 
        <!-- </div> -->
        <!-- end Navigation -->
        <br/><br/>
            <div class="container">
            <div class="assignmentBox">
                <div class="row">
                <div class="col-3"></div>
                    <div class="col-6 ">
                   
                    <h2>PHP Form Validation Example</h2>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                        Write any thing in the box:<br/>
                        <textarea name="comment" rows="5" cols="40"></textarea>
                          <br><br>
                          <input type="submit" name="submit" value="Submit">  
                        </form>
                        </div>
                        
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                    <?php
                        echo "<h2>Your Input:</h2>";
                        echo $comment;
                        ?>
                    </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                </div>
                </div>            
            
    </body>
</html>
