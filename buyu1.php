
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UNIFORMITYHUB - Buy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- php link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/efb8da428e.js" crossorigin="anonymous"></script>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary"><marquee>UNIFORMITYHUB</marquee></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
				<a href="userdash.php" class="nav-item nav-link "><i class="fa-solid fa-house-user"> &nbsp</i>Home</a>
                    <a href="seller.html" class="nav-item nav-link"><i class="fa-brands fa-sellcast"> &nbsp</i>Sell uniform</a>
					<a href="buyu1.php" class="nav-item nav-link active"><i class="fa-solid fa-cart-shopping"> &nbsp</i>Buy uniform</a>
					<a href="contact.html" class="nav-item nav-link "><i class="fa-solid fa-comment"> &nbsp</i>Feedback</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa-solid fa-arrow-left"> &nbsp</i>Logout</a>
            </div>
        </nav>
        <!-- Navbar End -->

        <br><h1 class="m-0 text-primary"><center><i class="fa-solid fa-shirt"> &nbsp</i>AVAILABLE UNIFORMS</center></h1><br><br>

<center>
 <?php
				include 'dbconnect.php';
				$mysqli=connectdb();
				if($mysqli->connect_error)
					{
					die("Connection Failed ".$mysqli->connect_error);
					}
					
					$sql="Select * from sell";
					$result=$mysqli->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{	
							echo '

<div class="card">
<form name="claim" action="claimitem.php" method="post">
  <img src="'.$row["supload"].'" alt="Avatar" style="width:100%">
  <div class="container">
  <h4>Uniform no: '.$row["uno"].'</h4>
  <h4>Seller Email: '.$row["uemail"].'</h4>
  <h4>College: '.$row["scollege"].'</h4>   
    <h4>Years used: '.$row["suy"].'</h4> 
    <h4>Size: '.$row["ssize"].'</h4> 
	 <h4>Price: '.$row["sprice"].'</h4>
	 <h4>Gender: '.$row["sgender"].'</h4> 
  </div>
  <br>
  <div class="col-12">
        <button class="btn btn-primary w-100 py-3" type="submit" name="btnbuy" id="btnclaim">Claim</button>
 </div>
  <br>
</div><br>

</form>';

$_SESSION['uno']=$row["uno"];
						}  
					}
				?>
                </center>
                

        <!-- Footer Start -->
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">UNIFORMITYHUB</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">Gagan & Ganesh Naik</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>