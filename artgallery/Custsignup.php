<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Signup</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Customer Account</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name"  name="lname" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Address</label>
                                                <input class="form-control py-4" id="inputAddress" type="text"  placeholder="Enter address" name="add" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="pass" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="confpass" />
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="form-row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group"> 
                                                      <a href="Artistsignup.php"class="p-1">OR register as Artist</a>
                                                    </div>
                                                </div>  
                                            <div class="form-group mt-5 mb-0">
                                                <!-- <a class="btn btn-primary btn-block " href="#" name="submit">Create Account</a> -->
                                                <input type="submit" value="Create Account" name="submit" class="btn btn-primary btn-block "/>
                                            
                                            
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>



<?php
//session_start();

$con=mysqli_connect('localhost','root','');
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 // echo "Connected successfully";
$db=mysqli_select_db($con,'artgallery1939');


if(isset($_POST["submit"]))
{
  
     //echo "";
    $firstn = $_POST["fname"];
    $lastn = $_POST["lname"];
    $add = $_POST["add"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $conpass = $_POST["confpass"];
    //  $q="select username from customer where username = '$email'";
    //  $sq=mysqli_query($con,$sq);
    //  $r=mysqli_num_rows($sq);
    //  if($r>1)
    //  {
       
    //     echo"<script>alert('Username not avaialbe');location.href='Custsignup.php';</script>";
    // }

    $sql= "INSERT INTO `customer` (`name` , `Last_name` , `address` , `username` , `password`) values('$firstn' , '$lastn' , '$add' , '$email' , '$password')";
    // $sql= "insert into `customer` (`name` , `Last_name` , `address` , `username` , `password`,`amt_spent`) values('tgds' , 'aasdgh' , 'asdfg' , 'rajat1234' , '1234' , 0)";
    $result=mysqli_query($con,$sql);
    if (!$result)
    {
       
        echo"<script>alert('Signup failed');location.href='Custsignup.php';</script>";

    } 
    else
    {
        // $_SESSION['user_logged_in']=true;
        // $_SESSION['uname']=$_fname;
        echo"<script>alert('Sign Up successfull');location.href='http://localhost/artgallery/index.php';</script>";
        
 
    }
    echo "hello";
}      

?>