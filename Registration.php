<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="styleSign.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
          <!-- Navigation -->
                <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
                <img src="pizzaImage/brand.jpg" class="navbar-brand" alt="pic" width="100px" height="80px"/>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarNavDropdown1" class="navbar-collapse collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="PizzasPage.html">Menu</a>
                            </li>
            
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="signIn.php" active><button class="specialButton">Sign In</button></a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><button class="specialButton">Sign Up</button></a>
                            </li>
                            <!--<li class="nav-item">-->
                            <!--<a class="nav-link" href="ClassTask.php">Class tasks</a>-->
                            <!--</li>-->
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
                        <div class="container-fluid">
                            <form action="signUp.php" method="POST" onsubmit="alert('Are you sure the information is provided is corrrect?')">
                                    <div class="form-group">
                                      <label for="user1"><b>First Name:</b></label>
                                      <input type="text" class="form-control" id="user1" name="fname" required>
                                    </div>
                                    <div class="form-group">
                                          <label for="lname"><b>Last Name:</b></label>
                                          <input type="text" class="form-control" id="lname" name="lname" required>
                                        </div>
                                <div class="form-group">
                                  <label for="user"><b>User Name:</b></label>
                                  <input type="text" class="form-control" id="user" name="username" required>
                                </div>
                                <div class="form-group">
                                  <label for="phone"><b>Phone Number:</b></label>
                                  <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>  
                                <div class="form-group">
                                  <label for="email"><b>Email Address:</b></label>
                                  <input type="email" class="form-control" id="email" name="email"required>
                                </div>
                                <div class="form-group">
                                  <label for="pwd"><b>Password:</b></label>
                                  <input type="password" class="form-control" id="pwd" name="pwd" required>
                                </div>
                                
                                <div class="form-group">
                                  <label for="cpwd"><b>Confirm Password:</b></label>
                                  <input type="password" class="form-control" id="cpwd" name="cpwd"required>
                                </div>
                                <div class="form-group">
                                  <label for="address"><b>Address:</b></label>
                                  <input type="text" class="form-control" id="address" name="address"required>
                                </div>
                                <div class="form-group">
                                    <label for="gender"><b>Gender:</b></label>
                                    <input type="radio"  class="radioButton" id="gender" name="gender" value="male" checked="checked">Male
                                    <input type="radio" class="radioButton" id="gender" name="gender" value="female">Female
                                    <input type="radio" class="radioButton" id="gender" name="gender" value="other">Other                                </div>
                                <div class="form-group">
                                  <label for="dob"><b>Date Of Birth:</b></label>
                                  <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="buttons">
                                        <input type="submit" class="btn btn-outline-warning" value="Submit"/>
                                        <input type="reset" class="btn btn-outline-warning" value="Reset"/>
                                </div>
                              </form>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="col-3"></div>
        </div>
        </div>
        <!-- end login box -->
    </body>
</html>