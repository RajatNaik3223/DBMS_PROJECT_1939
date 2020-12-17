

<?php include("navbar.php");
    include('../connection.php');
    ?>
    <div id="layoutSidenav_content">
<section class="my-5px">
    <div class="py-3">
        <h3 class="text-center">Total Earnings</h3>
    </div>        
    <!-- <div class="card-body"> -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                
                
                <th>Amount Spent</th>
               
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th>ID</th>
                <th>Name</th>
               
               
                <th>Amount Spent</th>
               
                </tr>
                </tfoot>

                <tbody>
                <?php
                $i=0;
                $count=0;
                $sql="select * from customer where amt_spent>0";
                $query=mysqli_query($con,$sql);
                while($result=mysqli_fetch_assoc($query))
                {
                    $id[$i]=$result['cust_id'];
                    $name[$i]=$result['name'];
                    $amt[$i]=$result['amt_spent'];

                
                ?>
                
                <tr>
                <td><?php echo$id[$i]?></td>
                <td><?php echo$name[$i]?></td>
               
               <td><?php echo$amt[$i] ?></td>
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






