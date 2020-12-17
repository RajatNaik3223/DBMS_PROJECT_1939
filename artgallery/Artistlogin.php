

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/formstyle.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="bg-light">
 <?php //include('navbar.php') ?> 
<div class="container p-5 ">
  <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
    <div class=" justify-content-center bg-light p-5 mx-5">
    <h2 class="text-center">ARTIST LOGIN</h2>
    <div class="container-luid ">
    <form action="#" method="POST" class="justify-content-center">
     <div class="form-group">
       <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="user">
      </div>
      <div class="form-group">
       <label for="pwd">Password:</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
      </div>
      <div class="form-group">
        <a href="Custlogin.php">Customer Login</a>
      </div>

      <div class="form-group form-check">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
      </div>
      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
      <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button>
      <button type="submit" class="btn btn-primary " name="submit">Submit</button>
      </div>
      
    </form>
   <br>
    <h5>OR  <a href="signup.php">create account</a></h5>

  </div>
</div>
</div>
</body>

</html>


<?php
session_start();

 $con=mysqli_connect('localhost','root','');
 if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
  // echo "Connected successfully";
 $db=mysqli_select_db($con,'artgallery1939');

if(isset($_POST['submit']))
{
    $username = $_POST["user"];
    $password = $_POST["pass"];
        $sql="select username,password,name,artist_id from artist where username = '$username' and password = '$password'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);
        if($row == 1)
        {
           while($elem=mysqli_fetch_assoc($query)){
               $dbusername=$elem['username'];
               $dbpassword=$elem['password'];
               $_SESSION['user_logged_in']='true';
               $name=$elem['name'];
               $id=$elem['artist_id'];
               $_SESSION['uname']=$name;
               $_SESSION['aId']=$id;
           }
           if($username==$dbusername && $password==$dbpassword){
               $_SESSION['user']=$username;
               $_SESSION['is']="artist";
               
               $sql2="INSERT into activity_log(identity,remark)values('Artist','logged in')";
              $q=mysqli_query($con,$sql2);
              // header('location: index.php');
               echo"<script>alert('login successful');location.href='index.php';</script>";

             




           }
           else
           {
              echo"<script>alert('login failed');location.href='login.php';</script>";
            // header('location: login.php');
           
             }
        
        }
 }







?>