<?php
include('navbar.php');
include('../connection.php');
?>
<div id="layoutSidenav_content">
<section class="my-5px">
    <div class="py-3">
        <h3 class="text-center">Activities</h3>
    </div>        
    <div class="container-fluid"> 
    <div class="card-body">
            <div class="table-responsive"> 
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
    <th>Time</th>                                   
    <th>Remark</th>
    <th>Is</th>
    </tr>
    </thead>
<?php


$sql="select * from activity_log";
$query = mysqli_query($con,$sql);
//$row = mysqli_num_rows($query);
while($elem=mysqli_fetch_assoc($query)){
$Time=$elem['time_date'];
$remark=$elem['remark'];
$ident=$elem['identity'];
?>     
    <tr>
        <td><?php echo$Time ?></td>
        <td><?php echo$remark ?></td>
        <td><?php echo$ident ?> </td>
    </tr>          
<?php
}
?>

<tfoot>
   <tr>
   <th>Time</th>                                   
    <th>Remark</th>
    <th>Is</th>
   </tr>
   </tfoot>
   </table>
</div>
</div>
</section>
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


