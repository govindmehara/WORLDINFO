<!DOCTYPE html>
<?php
ob_start();
include 'include/connection.php';
?>

<html>
<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-----------------------------------Bootstrap link --------------------------------->
  <link rel="stylesheet" type="text/css" href="css/index.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
 
 <!-----------------------------------Bootstrap link ---------------------------------->

</head>
<body>

	<div class="container-fluid alls">
	<!---                   sides------------------------->
	<div class="header " id="topheader" >	
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container text-uppercase p-2">
    <a class="navbar-brand text-uppercase text-white font-weight-bold" href="http://localhost/com.worldinfohub/index.php">WORLD INFO HUB</a>
    <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/com.worldinfohub/index.php">HOME</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="http://localhost/com.worldinfohub/category.php">CATEGORY</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="http://localhost/com.worldinfohub/about.php">ABOUT</a>
        </li>
             <li class="nav-item">
          <a class="nav-link" href="http://localhost/com.worldinfohub/contact.php">CONTACT</a>
        </li>
      
      </ul>
  
    </div>
  </div>
</nav>

<!--------------------------------header section --------------------------------------------->
<section class="header-section">
	<div class="center-div"> 

                 <h1 class="font-weight-bold text-uppercase"> welcome to the world info hub</h1>
                 <p class="text-uppercase "> top 10 in the world</p>
                 <div class="header-bottons text-uppercase font-weight-bold">
                 <a href="http://localhost/com.worldinfohub/category.php">show more</a>
                 <a href="http://localhost/com.worldinfohub/about.php">   about  </a>
             </div>
	</div>
	


</section>

</div>
<!-----------------------header part end-------------------------------------------------->

<div class="titles container-fluid ">
<div class="container">
               <div class="row "> 
           <?php
   
                         $query= "select I_IMG , CATEGORY from worldinfo";
                         $query_run= mysqli_query($conn, $query);
                         while($row= mysqli_fetch_array($query_run)){
                             ?>         
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 extra-titles">
                           
                            <div class="card" style="width: 16rem;">
                                
                                   <img src="data:image/jpeg;base64,<?php echo base64_encode($row['I_IMG']);?>" >
                                         <div class="card-body">
                                             <a href="#">  <p class="card-text ">top 10 <?php echo $row['CATEGORY'] ?> in the world</p></a>
                                         </div>
                            

                            </div>
                                
               </div>
                  
               	       
              <?php            
                     }
               ?>
               

</div>
</div>
	
<!-- Footer -->
<footer class="bg-dark text-center text-white p-3">
  <div class="container">
    <section class="mb-4 p-5">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/login/" role="button"
        ><i class="fa fa-facebook-f"></i></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/?lang=en" role="button"
        ><i class="fa fa-twitter"></i></a>
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"
        ><i class="fa fa-google"></i></a>
        <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
        ><i class="fa fa-instagram"></i></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/login" role="button"
        ><i class="fa fa-github"></i></a>
    </section>
      <p>
        “Education is the most powerful weapon which you can use to change the world” – Nelson Mandela. Education is the first step for people to gain the knowledge, critical thinking, empowerment and skills they need to make this world a better place. </p>

</div>
       <!--Grid row-->
      <div class="container">
      <div class="row">
        
        <!--Grid column-->
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h6 class="text-uppercase ">IMPORTANT LINK</h6>

          <ul class="list-unstyled">
            <li>
              <a href="https://collegeholkar.org/" >HOLKAR SCIENCE COLLEGE INDORE </a>
            </li>
            <li>
              <a href="http://scholarshipportal.mp.nic.in/Index.aspx" >MP SCHOLARSHIP PORTAL</a>
            </li>
            <li>
              <a href="https://meet.google.com/" >GOOGLE MEET</a>
            </li>
            <li>
              <a href="https://www.dauniv.ac.in/" >DAVV</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h6 class="text-uppercase"> PROJECT TEAM </h6>

          <ul class="list-unstyled">
            <li>
              <a href="#!" >GOVIND MEHARA(LEADER)</a>
            </li>
            <li>
              <a href="#!" >ANIL BHALLAVI</a>
            </li>
            <li>
              <a href="#!" >RAJENDRA SINGH</a>
            </li>
            <li>
              <a href="#!" >NIHARIKA JAISWAL</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-4 col-sm-12 ">
          <h6 class="text-uppercase">MENU</h6>

          <ul class="list-unstyled">
            <li>
              <a href="http://localhost/com.worldinfohub/index.php" >HOME</a>
            </li>
            <li>
              <a href="http://localhost/com.worldinfohub/category.php" >CATEGORY</a>
            </li>
            <li>
              <a href="http://localhost/com.worldinfohub/contact.php" >CONTACT</a>
            </li>
            <li>
              <a href="http://localhost/com.worldinfohub/about.php" >ABOUT</a>
            </li>
       
        </ul>

    </div>
</div>

<a class="text-white  copi" href="#">&copy; Copyright 2021 https://worldinfohub.com</a>

</div>

  
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>