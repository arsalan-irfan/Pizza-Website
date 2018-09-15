<?php
session_start();
?>

<html>
    <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="stylePizza.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
        
    </style>
    </head>
    <body>
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
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="ClassTask.php">Class tasks</a>-->
                        <!--</li>-->
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
         <!-- Start content -->
        <div class="container-fluid">
            <div class="row content mt-5 ">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="container-fluid text-center">
                        <h1 class="content1">Prepare yourself for</h1>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row content ">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container-fluid text-center">
                            <h1 class="content2">DAMN GOOD PIZZA</h1>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
        </div>
        <!-- end content -->
        <!-- start Additional Content -->
        <div class="newContent mt-5">
            <div class="container-fluid">
                <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-center">
                   <img src="pizzaImage/pizza_icon.png" alt="error" height="20%" width="20%" class="mt-5">
                   <h1 class="newContentHeading">WE TAKE THIS PIZZA-MAKING THING SERIOUSLY.</h1>
                   <div class="newContentRow">
                    <div class="row mt-5">
                        <div class="col-2"></div>
                        <div class="col-8"></div>
                        <div class="row">
                            <div class="col-6">
                                <p>
                                    So seriously, in fact, we traveled the world studying the best of the best and developed our own technique. While visiting pizzerias in Italy, 
                                    local slice joints in all 5 boroughs, and even your grandma for her special recipe (tell her we say hi!)
                                    , our only pizza task master was quality. After all our efforts we’re giddy to bring that quality to you.
                                </p>
                            </div>
                            <div class="col-6">
                                <p>So whether it’s our imported ingredients from Italy, our homemade meatballs and sauces, our special water filtration system, or the fact that the pizza is baked in an old-school, stone deck oven, know that when you eat a slice it doesn’t taste like that on accident. Good pizza is important to us and you'll be able to tell.

                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-2"></div>
                    </div>
                   </div>
                </div>
                <div class="col-2"></div>
                </div>
            </div>
        </div>
        <!-- end Additional Content -->
        <!-- start landing page -->
        <div class="landingPage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end landing page -->
        <!-- start location page  -->
        <div class="locationPage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="pizzaImage/location.png" alt="" class="Icon">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="locationContent1">WHERE TO FIND US.</h1>
                    </div>
                </div>
                <div class="locationBox">
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-8 ">
                            <div class="locationBoxContent">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="locationBoxContent1">Karachi</h1>
                                    </div>
                                    <div class="col-6">
                                        <h3 class="locationBoxContent2">+Boat Basin</h3>
                                        <br />
                                        <h3 class="locationBoxContent2">+Khadda Market,Defence</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end location page  -->
        <!-- start landing page2 -->
        <div class="landingPage2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end landing page2 -->
            <!-- star menu -->
            <div class="menu" id="menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="pizzaImage/fire.png" alt="pic" class="Icon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                           <h1 class="newContentHeading">THIS MENU IS ON FIRE!</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 text-center">
                          <div class="menuText">
                              <p>We work hard to keep our menu fresh and constantly evolving,
                                while always providing the staples you expect out of a great pizza shop.</p>
                          </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="container-fluid text-center">
                            <div class="row">
                            <div class="col-12">
                                <img src="pizzaImage/menu.png" alt="menu" class="menuPic">
                            </div>
                        </div>
                        <div class="container-fluid text-center">
                                <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="buttons">
                                    <a href="menu.php"><button class="specialButton1">MENU</button></a>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- end menu -->
            <!-- start end portion -->
            <div class="endingPortion">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="endPortionContent">FOR MORE DETAILS</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 text-center">
                            <div class="list">
                                <ul>
                                    <li class="specialList"><a href="#" class="specialLinks">Contact</a></li>
                                    <li class="specialList"><a href="#" class="specialLinks">Franchise</a></li>
                                    <li class="specialList"><a href="#" class="specialLinks">Terms&Conditions</a></li>
                                    <li class="specialList"><a href="#" class="specialLinks">Privacy&Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <p class="endPortionContent1">Designed By:Muhammad Arsalan |&copy; 2018</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ending end portion -->

    </body>
</html>