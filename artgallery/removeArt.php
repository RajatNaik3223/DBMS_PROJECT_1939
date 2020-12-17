<?php 
include('navbar.php');
include('connection.php');
?>

<body class="bg-light">


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
 </tr>

 <?php
}


if(isset($_POST['remove']))
    {
    $yearD=$_POST['dyear'];
    $named=$_POST['dName'];
     $sql1="delete from `artwork` where `Art_name`='$named' and `Year_of_making`='$yearD'";
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
  <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
    <div class=" justify-content-center bg-light p-5 mx-5">
    <h2 class="text-center">Add Artwork</h2>
    <div class="container-fluid">
    <form action="removeArt.php" method="POST" class="justify-content-center" enctype="multipart/form-data"> 
     <div class="form-group">
       <label for="text">Art Name</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter Art Name " name="dName">
      </div>
      <div class="form-group ">
       <label for="text">Year of making</label>
       <input type="date" class="form-control"  id="date" placeholder="Enter Year of making " name="dyear">
      </div>
      </div>
      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
      <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button>
      <button type="submit" class="btn btn-primary " name="remove">Submit</button>
      </div>
      
    </form>
   <br>

  </div>
</div>
</body>
</html>
