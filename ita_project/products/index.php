<!DOCTYPE html>
<html>
<head>
	<title>Mens shirts</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	</script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<a href="../home.html"><button type="button" class="btn btn-default">HOME</button></a>
  <h2>Mens Clothing</h2><br>

  <div class="col-md-10">
   <div class="row">
         
         <div class="col-md-3">
         <h4>Levis shirt</h4>
         <img src="images/blue_shirt.jpeg" alt="Levis shirt" id="images"/>
         <p class="price"> Price: 1500/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
         </div>

         <div class="col-md-3">
         <h4>Levis white shirt</h4>
         <img src="images/Levis_white.jpg" alt="Levis white shirt" id="images"/>
         <p class="price"> Price: 1000/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
         </div>

         <div class="col-md-3">
         <h4>Levis red shirt</h4>
         <img src="images/Levis_red.jpg" alt="Levis red shirt" id="images"/>
         <p class="price"> Price: 1200/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
         </div>

         <div class="col-md-3">
         <h4>Levis black shirt</h4>
         <img src="images/Levis_black.jpg" alt="Levis black shirt" id="images"/>
         <p class="price"> Price: 800/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
         </div>

         <div class="col-md-3">
         <h4>adidas shirt</h4>
         <img src="images/adidas.jpg" alt="Adidas shirt" id="images"/>
         <p class="price"> Price: 2000/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
         </div>

         <div class="col-md-3">
         <h4>Roadster</h4>
         <img src="images/roadster.jpg" alt="Roadster" id="images"/>
         <p class="price"> Price: 1700/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
         </div>


         <div class="col-md-3">
         <h4>Arrow</h4>
         <img src="images/Arrow_grey.jpg" alt="Arrow" id="images"/>
         <p class="price"> Price: 2500/-</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
         </div>

    </div>
</div>  

<footer class="text-center" id="footer">&copy; copyright 2018</footer>

<?php include 'details-modal-levis-blue.php';
      include 'details-modal-leviswhite.php';
      include 'details-modal-levis-red.php';
       include 'details-modal-levis-black.php';
        include 'details-modal-adidas.php';
        include 'details-modal-roadster.php';
        include 'details-modal-arrow.php';   
?>

</body>
</html>