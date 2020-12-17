<!DOCTYPE html>
<?php
include('navbar.php');
include('connection.php');
?>

    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
    <th>painting</th>                                   
    <th>Name</th>
    <th>Date of creation</th>
    <th>Price</th>
    <th>delete</th>
    </tr>
    </thead>


<?php
$artistid=$_SESSION['aId'];
$i=0;

$sql="select * from `artwork` join `created_by` on `artwork`.`Art_id`=`created_by`.`Art_id` where `created_by`.`artist_id`='$artistid'";
$query=mysqli_query($con,$sql);
while($elem=mysqli_fetch_array($query)){
    $url=$elem['Art_url'];
    $name=$elem['Art_name'];
    $year=$elem['Year_of_making'];
    $price=$elem['Price'];
    $id=$elem['Art_id'];
    ?>
<tr>
<td>
<img src="<?php echo $url ?>" alt="image" class="img-fluid pb-3" height="160px" width="200px"></td>
<td> <?php echo $name?></td>
 <td><?php echo $year ?></td>
 <td><?php echo $price?>   </td>
 <td><form action="removeArt.php" method="post"> 
    <input type="submit" value="<?php echo $i ?>" name="remove"  class="btn btn-primary" />
    </form
    ></td>
 </tr>
$i++;
<?php
}






if(isset($_POST['remove'])&& ctype_digit('remove'))
    {
     $sql1="delete from `artwork` where `Art_id`='$id'";
     $query1=mysqli_query($con,$sql1);
     if($query1){
        echo"<script>alert('Artwork Removed');location.href='removeArt.php';</script>";
     }
       
}



?>
<tfoot>
   <tr>
   <th>painting</th>                                   
   <th>Name</th>
   <th>Date of creation</th>
   <th>Price</th> 
   <th>delete</th>   
   </tr>
   </tfoot>
   </br>
   </br>
   </br>
</div>

              



        </div>
    
      </section>
</body>
</html>

