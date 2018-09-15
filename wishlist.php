<?php
session_start();
?>
<html>
    <head>
        <title>Wishlist</title>
        <link rel="stylesheet" href="stylePizzaPg.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/pizza.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
        <br>
        <div class="row text-center">
            <div class="col-12">
                <span class="wishlist">Wishlist</span>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12">
                <span class="customer">Customer Name:</span>
                <span class="name"><?php echo $_SESSION['u_fname']." ".$_SESSION['u_lname']?> </span>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <button class="btn btn-danger" onclick="displayTable();">Generate Slip</button>
            </div>
        </div>
        <br>
        <div class="table">
        <div id="tableHead">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-1 tableHeading">S No</div>
                    <div class="col-2 tableHeading">Image</div>
                    <div class="col-2 tableHeading">Name</div>
                    <div class="col-1 tableHeading">Quantity</div>
                    <div class="col-1 tableHeading">Topping</div>
                    <div class="col-2 tableHeading">Size</div>
                    <div class="col-1 tableHeading">Type</div>
                    <div class="col-1 tableHeading">Amount</div>
                    <div class="col-1" ></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="tableBody">
            
            </div>
        </div>    
		<div class="container-fluid">
            <div class="row text-center">
                <div class="col-5"><h1 class="billHeading">Total Pizzas</h1></div>
                <div class="col-2"></div>
                <div class="col-5"><h1 class="billHeading">Total Amount</h1></div>
            </div>
            
			<div class="row text-center">
                    <div class='col-5'><h2 class='footerElements' id="noOfPizza"></h2></div>
                    <div class='col-2'></div>
                    <div class='col-5'><h2 class='footerElements' id="totalBill"></h2></div>
            </div>

        </div>
          <div class="row ">
              <div class="menuButton">
                <div class="col-12"><a href="menu.php"><button class="btn btn-info">Menu</button></a></div> 
              </div>
          </div>  
        </div>
        </div>    
    </body>
</html>