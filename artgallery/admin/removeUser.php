
    <?php include("navbar.php")?>


        <!-- <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <form method="post" action="Dashboard.php">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress" >User Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="user" placeholder="Enter email address" />
                                            </div>
                                        </form>
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
        </div> -->
    </div>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
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

if(isset($_POST['submit']))
{
    $username = $_POST["user"];
   // $password = $_POST["pass"];
        $sql="select * from artist where username = '$username'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);
        if($row == 1)
        {
           while($elem=mysqli_fetch_assoc($query)){
               $name=$elem['name'];
               $dbpassword=$elem['password'];
               $_SESSION['user_logged_in']='true';
               $name=$elem['name'];
               $_SESSION['uname']=$name;
           }
           if($username==$dbusername && $password==$dbpassword){
               $_SESSION['user']=$username;
             
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
