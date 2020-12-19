

<?php
include('navbar.php');
include('connection.php');
//$j=$_SESSION['j'];
$count=$_SESSION['count'];
$custid=$_SESSION['cId'];
$i=0;
$art_id=$_SESSION['Aid'];

$sql="select `artwork`.`Art_name`,`artwork`.`Price`,`artwork`.`Year_of_making`,`artist`.`name`,`artist`.`Last_name` from `artwork` join `created_by` on `artwork`.`Art_id`=`created_by`.`Art_id` join `artist` on `artist`.`artist_id`=`created_by`.`artist_id` where `artwork`.`Art_id`='$art_id'";
$query=mysqli_query($con,$sql);
while($elem=mysqli_fetch_assoc($query)){
    $name=$elem['Art_name'];
    $price=$elem['Price'];
    $year=$elem['Year_of_making'];

}


?>





<div class="container p-5 ">
  <div class="container-fluid p-5  shadow-lg border-3 rounded-lg mt-5">
        <div class=" justify-content-center bg-light p-5 mx-5">
             <h2 class="text-center">Purchase Reciept</h2>
             <div class="container-fluid border-2">
                <form action="explore.php" method="POST" class="justify-content-center">

                <div class=" d-flex text-center justify-content-between mt-4 mb-0">
                <label> Buyer name: </label>  <?php echo $_SESSION['uname']?> 
                </div>

                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <label> Art name: </label><?php echo $name?>   
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <label> Art price:</label> <?php echo $price?>   
                </div> 
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <label> Created on:</label> <?php echo $year?>   
                </div> 
                 <div class="form-group d-flex justify-content-between mt-4 mb-0">
                  <!-- <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button> -->
                  <button type="submit" class="btn btn-primary " name="<?php echo $j?>">Confirm</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>