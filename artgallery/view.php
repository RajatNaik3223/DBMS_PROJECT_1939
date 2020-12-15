<!DOCTYPE html>


<?php
include('navbar.php');
?>
<section class="my-5px">
            <div class="py-3">
            <h3 class="text-center">Art Work</h3>

            </div>
        <div class="container-fluid">
          <div class="row">
<?php
include('connection.php');

$sql="select * from artwork";
$query = mysqli_query($con,$sql);
//$row = mysqli_num_rows($query);
while($elem=mysqli_fetch_assoc($query)){
$url=$elem['Art_url'];
$name=$elem['Art_name'];
$year=$elem['Year_of_making'];
$price=$elem['Price'];
$id=$elem['Art_id'];


     $sql1="select `name`,`Last_name` from `artist`where `artist_id` in (select artist_id from `created_by` join `artwork` on `created_by`.`Art_id`=`artwork`.`Art_id` where `created_by`.`Art_id`='$id')";
     $result=mysqli_query($con,$sql1);  
     while($row=mysqli_fetch_assoc($result))
     {   
     $Aname=$row['name'];
     $lastname=$row['Last_name'];
    // $id=$row['artist_id'];
     }
?>
       
         
             <div class="col-lg-4  col-md-4 col-12 pb-4">
              <img src="<?php echo $url?>" alt="image" class="img-fluid pb-3">
              <h4 class="card-title"><?php //echo $name.$lastname?></h4>
              <p class="card-text"><?php echo"Art Name :".$name ?></br>
                                    <?php echo"Art By :".$Aname." ".$lastname ?></br>
                                    <?php echo" Created On :".$year ?> </br>
                                    <?php echo" Price ;".$price ?>   
                
                
                </p>
              <a href="Profile.php" class="btn btn-primary">See Profile</a>   
            </div>
         
<?php
}
?>
   </div>
        </div>
    
      </section>
</body>
</html>







