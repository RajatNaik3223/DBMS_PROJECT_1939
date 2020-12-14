<?php
//session_start();
//$_SESSION['user'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Patrick+Hand&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body class="bg-dark text-light">  
    <!-- <h1>Hello, world!</h1> -->
    
        <?php
        include'navbar.php';
        ?>


      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/painting.jpg" alt="Los Angeles" width=1100 height=500>
            <!-- <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>    -->
          </div>
          <div class="carousel-item">
            <img src="images/art3.jpg" alt="Chicago" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>    -->
          </div>
          <div class="carousel-item">
            <img src="images/bob.jpg" alt="New York" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>    -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <section class="my-5px">
        <div class="py-3">
          <h3 class="text-center">
          About us
          </h3>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <img src="images/img3.jpg" alt="image" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
             <h2 class="display-5">
              Art Gallery
              </h2>
             <p class="py-1">
              Bringing everything together.
              Since 1994, Artlogic has been building technology to improve the art world.
              With complete website and database integration, CRM and built-in sales management tools, 
              we offer the world’s most advanced art platform for everyone - from small to large galleries,
              artists who are just starting out to establish studios, and collectors of every type and size.
             </p>
             <a href="" class="btn btn-success">check more</a>
            </div>
          </div>
        </div> 

      </section>

      
      <section class="my-5px text-dark">
        <div class="py-3">
          <h3 class="text-center">Our services</h3>
        </div>
       <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="images/img1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="images/img1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>


            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="images/img1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>

          </div> 
        </div>
      </section>


    <footer class="p-0 bg-dark text-light text-center">
    <p>artgallery@art.com</p>

    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>