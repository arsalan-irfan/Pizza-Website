<?php
session_start();
?>

<html>
    <head>
        <title>Pizza</title>
        <link rel="stylesheet" href="stylePizzaPg.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/pizza.js"></script>
        <style>
        /* .rateList{
        font-weight: bold;
        text-transform: capitalize;
        border-top: red;
        border-bottom: red;
        color: green;
        margin-top: 10px;
        margin-bottom:10px;
    } */
        </style>
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="ClassTask.php">Class tasks</a>
                        </li> -->
        
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
            <div class="totalNavBar">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4" >
                            <div class="totalNavBarText">
                                    Total Pizza Ordered
                                    <span class="number" id="totalPizza">0</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <?php 
                                if(isset($_SESSION['u_id'])){
                                    echo'<div class="whishlistButton" align="right"><a href="wishlist.php"><button class="btn btn-outline-light">Wishlist</button></a></div>';
                                }
                                else{
                                    echo '<div class="totalNavBarText1">Sign in for wishlist</div>';
                                }
                            ?>

                        </div>
                    </div>
                </div>
            <body>
        <!-- end Navigation -->
       <!-- start Vege pizza Grid -->
       <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="gridContent"><ins>Vegeterian's Pizza</ins></h1>
            </div>
        </div>
        <div class="rateList">
        <div class="container-fluid">
        <div class="row text-center" >
            <div class="col-1"></div>
            <div class="col-2"><h4>Small:250RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Regular:500RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Large:750RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>XLarge:1000RS</h4></div>
        </div>
        </div>
        </div>
    </div>
    <!-- end pizza grid -->
    <!-- start Vegeterian's pizza -->

    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-2"></div> -->
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="vegePizza/Magherita.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Magherita</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available &
                         <b>30 Rs will charge on extra topping!</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo1">Add To Cart</button>
                            <div class="collapse" id="demo1">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(1);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity1" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(1);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(1);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping1" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(1);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(1);">+</button></div>
                                        <div class="col-4 text-center"><span id="size1" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(1);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(1,'vegetable');">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                     </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="vegePizza/pizza1.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Mushroom Truffle</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo2">Add To Cart</button>
                            <div class="collapse" id="demo2">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(2);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity2" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(2);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(2);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping2" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(2);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(2);">+</button></div>
                                        <div class="col-4 text-center"><span id="size2" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(2);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(2,'vegetable');">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="vegePizza/pizza2.jpg" alt="pizza"/>
                <div class="card-body">
                    <h4 class="card-title"><b>Paneer Tikka</b></h4>
                    <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                    </p>
                    <button class="btn btn-info" data-toggle="collapse" data-target="#demo3">Add To Cart</button>
                            <div class="collapse" id="demo3">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(3);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity3" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(3);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(3);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping3" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(3);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(3);">+</button></div>
                                        <div class="col-4 text-center"><span id="size3" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(3);">-</button></div>
                                    </div>
                                </div>
                                <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(3,'vegetable');">Submit</button>
                                        </div>
                                    </div>

                            </div>
                </div>
            </div>
            </div>
            <!-- <div class="col-1"></div> -->
    </div>
    <br /> <br />
    <div class="container-fluid">
        <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="vegePizza/pizza3.jpg" alt="pizza"/>
                <div class="card-body">
                    <h4 class="card-title"><b>Cheese & Mushroom Combo</b></h4>
                    <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                    </p>
                    <button class="btn btn-info" data-toggle="collapse" data-target="#demo4">Add To Cart</button>
                            <div class="collapse" id="demo4">
                                 <br/>
                                 <div class="row">
                                    <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                    <div class="col-2"><button class="btn btn-success" onclick="quantityInc(4);">+</button></div>
                                    <div class="col-4 text-center"><span id="quantity4" class="text1">0</span> </div>
                                    <div class="col-2"><button class="btn btn-success" onclick="quantitydec(4);">-</button></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                    <div class="col-2"><button class="btn btn-success" onclick="toppingInc(4);">+</button></div>
                                    <div class="col-4 text-center"><span id="topping4" class="text1">1x</span></div>
                                    <div class="col-2"><button class="btn btn-success" onclick="toppingdec(4);">-</button></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                    <div class="col-2"><button class="btn btn-success" onclick="sizeInc(4);">+</button></div>
                                    <div class="col-4 text-center"><span id="size4" class="text2">small</span></div>
                                    <div class="col-2"><button class="btn btn-success" onclick="sizeDec(4);">-</button></div>
                                </div>
                                <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(4,'vegetable');">Submit</button>
                                        </div>
                                    </div>

                            </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="vegePizza/pizza4.jpg" alt="pizza"/>
                <div class="card-body">
                    <h4 class="card-title"><b>Vegie Special</b></h4>
                    <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                    </p>
                    <button class="btn btn-info" data-toggle="collapse" data-target="#demo5">Add To Cart</button>
                            <div class="collapse" id="demo5">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(5);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity5" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(5);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(5);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping5" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(5);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(5);">+</button></div>
                                        <div class="col-4 text-center"><span id="size5" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(5);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(1,'vegetable');">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    </div>
    <!-- end Vegeterian's pizza -->
    <!-- start chicken Pizza -->

    <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="gridContent"><ins>Chicken Pizza</ins></h1>
                </div>
            </div>
            <div class="rateList">
            <div class="container-fluid">
            <div class="row text-center" >
            <div class="col-1"></div>
            <div class="col-2"><h4>Small:350RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Regular:600RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Large:850RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>XLarge:1100RS</h4></div>
        </div>
        </div>
        </div>  
        </div>        
    <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-2"></div> -->
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="chickenPizza/pizza1.jpg" alt="pizza"/>
                        <div class="card-body">
                            <h4 class="card-title"><b>Chicken Tikka</b></h4>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available
                             <b>30 Rs will charge on extra topping</b>
                            </p>
                            <button class="btn btn-info" data-toggle="collapse" data-target="#demo6">Add To Cart</button>
                            <div class="collapse" id="demo6">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(6);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity6" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(6);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(6);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping6" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(6);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(6);">+</button></div>
                                        <div class="col-4 text-center"><span id="size6" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(6);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(6,'chicken');">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="chickenPizza/pizza2.jpg" alt="pizza"/>
                        <div class="card-body">
                            <h4 class="card-title"><b>Chicken Fajita</b></h4>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available
                             <b>30 Rs will charge on extra topping</b>
                            </p>
                            <button class="btn btn-info" data-toggle="collapse" data-target="#demo7">Add To Cart</button>
                            <div class="collapse" id="demo7">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(7);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity7" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(7);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(7);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping7" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(7);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(7);">+</button></div>
                                        <div class="col-4 text-center"><span id="size7" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(7);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(7,'chicken');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="chickenPizza/pizza3.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Chicken Tandoori</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo8">Add To Cart</button>
                            <div class="collapse" id="demo8">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(8);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity8" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(8);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(8);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping8" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(8);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(8);">+</button></div>
                                        <div class="col-4 text-center"><span id="size8" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(8);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(8,'chicken');">Submit</button>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
                </div>
                <!-- <div class="col-1"></div> -->
        </div>
            </div>
            </div>
        <br /> <br />
        <div class="container-fluid">
            <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="chickenPizza/pizza4.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Chicken Supreme</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo9">Add To Cart</button>
                            <div class="collapse" id="demo9">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(9);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity9" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(9);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(9);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping9" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(9);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(9);">+</button></div>
                                        <div class="col-4 text-center"><span id="size9" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(9);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(9,'chicken');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="chickenPizza/pizza5.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Chicken n Cheese</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo10">Add To Cart</button>
                            <div class="collapse" id="demo10">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(10);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity10" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(10);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(10);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping10" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(10);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(10);">+</button></div>
                                        <div class="col-4 text-center"><span id="size10" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(10);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(10,'chicken');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        </div>
    <!-- end chicken Pizza -->
    <!-- Start Beef Pizza -->
    <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="gridContent"><ins>Beef Pizza</ins></h1>
                </div>
            </div>
            <div class="rateList">
<div class="container-fluid">
<div class="row text-center" >
            <div class="col-1"></div>
            <div class="col-2"><h4>Small:450RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Regular:700RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>Large:950RS</h4></div>
            <div class="col-1"></div>
            <div class="col-2"><h4>XLarge:1200RS</h4></div>
        </div>
        </div>
        </div>
        </div>        
    <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-2"></div> -->
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="beefPizza/pizza1.jpg" alt="pizza"/>
                        <div class="card-body">
                            <h4 class="card-title"><b>Beef Bihari</b></h4>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available
                             <b>30 Rs will charge on extra topping</b>
                            </p>
                            <button class="btn btn-info" data-toggle="collapse" data-target="#demo11">Add To Cart</button>
                            <div class="collapse" id="demo11">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(11);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity1" class="text11">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(11);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(11);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping1" class="text11">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(11);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(11);">+</button></div>
                                        <div class="col-4 text-center"><span id="size11" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(11);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(11,'beef');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="beefPizza/pizza2.jpg" alt="pizza"/>
                        <div class="card-body">
                            <h4 class="card-title"><b>BBQ</b></h4>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available
                             <b>30 Rs will charge on extra topping</b>
                            </p>
                            <button class="btn btn-info" data-toggle="collapse" data-target="#demo12">Add To Cart</button>
                            <div class="collapse" id="demo12">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(12);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity12" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(12);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(12);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping12" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(12);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(12);">+</button></div>
                                        <div class="col-4 text-center"><span id="size12" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(12);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(12,'beef');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="beefPizza/pizza3.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Beef Overloaded!</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo13">Add To Cart</button>
                            <div class="collapse" id="demo13">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(13);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity13" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(13);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(13);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping13" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(13);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(13);">+</button></div>
                                        <div class="col-4 text-center"><span id="size13" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(13);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(13,'beef');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </div>
                <!-- <div class="col-1"></div> -->
        </div>
        <br /> <br />
        <div class="container-fluid">
            <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="beefPizza/pizza4.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title text-center"><b>Beef Special</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo14">Add To Cart</button>
                            <div class="collapse" id="demo14">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(14);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity14" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(14);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(14);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping14" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(14);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(14);">+</button></div>
                                        <div class="col-4 text-center"><span id="size14" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(14);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(14,'beef');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="beefPizza/pizza5.jpg" alt="pizza"/>
                    <div class="card-body">
                        <h4 class="card-title"><b>Malai Boti</b></h4>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available
                         <b>30 Rs will charge on extra topping</b>
                        </p>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#demo15">Add To Cart</button>
                            <div class="collapse" id="demo15">
                                 <br/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Quantity:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantityInc(15);">+</button></div>
                                        <div class="col-4 text-center"><span id="quantity15" class="text1">0</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="quantitydec(15);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Toppings:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingInc(15);">+</button></div>
                                        <div class="col-4 text-center"><span id="topping15" class="text1">1x</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="toppingdec(15);">-</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-center"><span class="txtButton">Size:</span> </div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeInc(15);">+</button></div>
                                        <div class="col-4 text-center"><span id="size15" class="text2">small</span></div>
                                        <div class="col-2"><button class="btn btn-success" onclick="sizeDec(15);">-</button></div>
                                    </div>
                                    <br/>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-primary" onclick="addToCart(15,'beef');">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- end Beef Pizza -->
</body>
    <script>
        document.getElementById("totalPizza").innerHTML=localStorage.getItem("pizza");

    </script>
</html>