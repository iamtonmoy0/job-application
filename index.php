<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <?php
    require("./common/common.php")
    ?>

    <title>Bit Tech</title>
  </head>
  <body class="text-center">
	<!-- nav bar -->
	<main >
		<nav class="navbar navbar-expand-lg " style="background-color: #18f7ef;">
  <div class="container-fluid">
    <a class="navbar-brand font-monospace text-dark text-bold" href="#">Bit-Tech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-dark" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	</main>
<!-- form section -->
<main class="justify-content-center align-items-center text-center " style="background-color:#d3d3d3 ;">
	<h3><?php
	echo(Company); 
	?> Job Application</h3>
	<p>Are you looking for career in the world of Tech? Look no further!</p>
	<form action="./assets/jobapp_action.php" name="frmJobApp" method="POST" class="container bg-white rounded " >
		<input type="text" name="applicant" id="" placeholder="Please Enter Your Name" class="form-control-plaintext ">
                 <input type="text" name="email" id="" placeholder="Please Enter Your Email Address" class="form-control-plaintext ">
<input type="text" name="phone" id="" placeholder="Please Enter Your Phone" class="form-control-plaintext ">
	</form>
	<p>Please select the type of position in which you are interested:</p>
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  Select
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">Web Dev</a></li>
    <li><a class="dropdown-item" href="#">App Dev</a></li>
    <li><a  href="#">Core Dev</a></li>
    <li> <a href="" class="dropdown-item">Finance</a> </li>
    <li><a class="dropdown-item" href="#">Management</a></li>
  </ul>
</div><br>
	<p>select country</p>
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Select
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" name="">
    <li><a class="dropdown-item active" href="#">US</a></li>
    <li><a class="dropdown-item" href="#">Africa</a></li>
    <li><a class="dropdown-item" href="#">Canada</a></li>
    <li><a href="" class="dropdown-item">India</a></li>
    <li><a class="dropdown-item" href="#">china</a></li>
  </ul>
</div>
	
</main>
<input type="checkbox" name="avail">Available Immediately <br>
<button type="submit" name="enter" value="Enter" class=" btn btn-info">Submit</button>


















   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
