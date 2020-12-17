
    <?php include("navbar.php");
    include('../connection.php');
    ?>
    <div id="layoutSidenav_content">
<section class="my-5px">
    <div class="py-3">
        <h3 class="text-center">Remove Artist</h3>
    </div>        
    <!-- <div class="card-body"> -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <!-- <th>Amount Spent</th> -->
                <th>Remove</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <!-- <th>Amount Spent</th> -->
                <th>Remove</th>
                </tr>
                </tfoot>

                <tbody>
                <?php
                $i=0;
                $count=0;
                $sql="select * from artist";
                $query=mysqli_query($con,$sql);
                while($result=mysqli_fetch_assoc($query))
                {
                    $id[$i]=$result['artist_id'];
                    $name[$i]=$result['name'];
                    $lname[$i]=$result['Last_name'];
                    $add[$i]=$result['address'];
                    // $amt[$i]=$result['amt_spent'];

                
                ?>
                
                <tr>
                <td><?php echo$id[$i]?></td>
                <td><?php echo$name[$i]?></td>
                <td><?php echo$lname[$i] ?></td>
                <td><?php echo$add[$i] ?></td>
                <td> <form action="removeArtist.php" method="post" > <input type="submit" value="Remove" name="<?php echo$i ?>"></form> </a></td>
                </tr>
                <?php 
                $i++;
                $count++;
                }?>
                </tbody>
            </table>
            <!-- <div class="justify-content-center">
            <form method="POST" action="removeUser" >
            <label for="delID">Enter the id of user</label>
            <input type="text" name="delId" id="delID" value="ID" placeholder="Enter the ID of the user to remove user"\>
            
            </form>
            </div> -->
        </div>
    </div>
    <!-- </div> -->
    </section>
    
    


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


$j=0;
  for($j=0;$j<$count;$j++)
  {
    if(isset($_POST[$j])){
     
       $sql2="delete from artist where artist_id='$id[$j]' ";
        $q=mysqli_query($con,$sql2);
        if($q){

          $sql3="INSERT into activity_log(identity,remark)values('Admin','Removed Artist')";//activity log
          $q2=mysqli_query($con,$sql3);



            echo "<script>alert('Artist Removed');location.href='removeArtist.php'; </script>";
       }
       
        else{
            echo "<script>alert('Artist was not removed');location.href='removeArtist.php'; </script>";
             continue;
        }
    }

}



?>
