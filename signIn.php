<?php
session_start();

?>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="styleSign.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
                <a class="navbar-brand" href="javascriptvoid(0)"> <img src="pizzaImage/brand.jpg" class="navbar-brand" alt="pic" width="100px" height="80px"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="ClassTask.php">Class tasks</a>-->
                        <!--</li>-->
        
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="#" ><button class="specialButton">Sign In</button></a>
                        </li>
                        <li class="nav-item">
                        <a href="Registration.php"><button class="specialButton">Sign Up</button></a>
                        </li>
                    </ul>

                </div>
            </nav> 
            <!-- end Navigation -->
        <!-- Start login box -->
            <div class="container-fluid">
                <div class="login">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 ">
                            <img src="pizzaImage/avatar.jpg" class="avatar" alt="pic">'
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
                        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="loginBox">
                        <form action="login.php" method="Post">
                            <div class="form-group">
                              <label for="email"><b>User name:</b></label>
                              <input type="text" class="form-control" id="email" name="uid" required>
                            </div>
                            <div class="form-group">
                              <label for="pwd"><b>Password:</b></label>
                              <input type="password" class="form-control" id="pwd" name="pwd" required>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> <b>Remember me</b>
                              </label>
                            </div>
                            <div class="buttons">
                                    <input type="submit" class="btn btn-outline-warning" value="Sign In">
                                    <a href="Registration.php"><button type="button" class="btn btn-outline-warning">Sign Up</button></a>
                            </div>
                          </form>   
                        </div>
                        <div class="col-3"></div>
                </div>
            </div> 
        </div>      
                    
                
        <!-- end login box -->
    </body>
</html>