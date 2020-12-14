<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="#" method="POST" >
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress" >Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="usern" placeholder="Enter email address / Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password"  name="passw"  placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <!-- <a class="btn btn-primary" name="submit">Login</a> -->
                                                <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
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
   echo "Connected successfully";
 $db=mysqli_select_db($con,'artgallery1939');

if(isset($_POST['submit']))
{
    $username = $_POST["usern"];
    $password = $_POST["passw"];
        $sql="select user,pass from adminlogin where user = '$username' and pass = '$password'";
        $query = mysqli_query($con,$sql);
         $row_num = mysqli_num_rows($query);
         if($row_num != 0)
         {
            while($row=mysqli_fetch_assoc($query)){
                $dbusername=$row['user'];
                $dbpassword=$row['pass'];

            }
            if($username==$dbusername && $password==$dbpassword){
                $_SESSION['user']=$username;
                //header('location: Dashboard.html');
                echo"<script>alert('login successful');location.href='Dashboard.php';</script>";
            }
            else{
                 echo"login failed";
               //  header("location: index.php");
                }
            
         }
        //  else{
        //     echo"login failed";
        //     header("location: index.php");
        //  }
         


         
 }

