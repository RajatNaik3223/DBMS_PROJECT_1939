<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Patrick+Hand&display=swap" rel="stylesheet">





    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
          
        <a class="navbar-brand" href="#">ART GALLERY</a>
        <div id="mySidenav" class="sidenav">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
            if($_SESSION['is']=="cust")
            {
            ?>
            <a href="http://localhost/artgallery/Artists.php">Artist</a>
            <a href="#">Art Style</a>
            <a href="#">Buy Artpiece</a>
            <a href="#">Contact</a>
            <?php

            }else
            {
            ?>
             <!-- <a href="http://localhost/artgallery/Artists.php">Artist</a> -->
            <a href="http://localhost/artgallery/addArtWork.php">Add Artwork</a>
            <a href="#">remove artwork</a>
            <a href="#">Contact</a>
            <?php
            }
            ?>
            
          </div>
          
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="text-light">
            <button class="btn bg-dark"><i class="fa fa-bars bg-dark"></i></button>
        
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Explore.php">Explore</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            <li class="nav-item">
                <?php
                if(isset($_SESSION['user_logged_in'])&& $_SESSION['user_logged_in']==true)
                {
                echo"<a class='nav-link' href='http://localhost/artgallery/logout.php'>Logout (" .$_SESSION['uname']. ")</a>";
                }
                else
                
              echo"<a class='nav-link' href='http://localhost/artgallery/Custlogin.php'>Login</a>";
              ?>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </div>
      </nav>



      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
            /* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
        </script>

</body>
</html>