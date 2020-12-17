<!DOCTYPE html>
<?php
include('connection.php');
include('navbar.php');
if(isset($_SESSION['aId']))
{


$artistId=$_SESSION['aId'];
?>

<section class="my-5px">
    <div class="py-3">
        <h3 class="text-center">Art Work</h3>
    </div>        
    <div class="container-fluid">  
        <div class="row">

     <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
    <th>ID</th>                                   
    <th>Name</th>
    <th>Date of creation</th>
    <th>Price</th>
    </tr>
    </thead>
<?php


$sql="select * from artwork where artwork.Art_id in (select a.Art_id from artwork a join created_by b on a.Art_id=b.Art_id where b.artist_id='$artistId')";
$query = mysqli_query($con,$sql);
//$row = mysqli_num_rows($query);
while($elem=mysqli_fetch_assoc($query)){
$url=$elem['Art_url'];
$name=$elem['Art_name'];
$year=$elem['Year_of_making'];
$price=$elem['Price'];
$id=$elem['Art_id'];
?>     
    <tr>
        <td><?php echo$id ?></td>
        <td><?php echo$name ?></td>
        <td><?php echo$year ?> </td>
        <td><?php echo$price ?> </td>
    </tr>          
<?php
}


}
?>

<tfoot>
   <tr>
   <th>ID</th>                                   
   <th>Name</th>
   <th>Date of creation</th>
   <th>Price</th>    
   </tr>
   </tfoot>
   </table>


    
   <div class="container p-5  ">
  <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
    <div class=" justify-content-center bg-light p-5 mx-5">
    <h2 class="text-center">Update Artwork information</h2>
    <div class="container-fluid">
    <form action="updateArtinfo.php" method="POST" class="justify-content-center" enctype="multipart/form-data"> 

    <div class="form-group">
       <label for="text">ID</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter the ID of the artwork you want to update " name="id">
      </div> 

    
     <div class="form-group">
       <label for="text">Art Name</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter new art name " name="artName">
      </div> 

      <div class="form-group">
       <label for="text">price</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter new price " name="price">
      </div>

      </div>
      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
      <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button>
      <button type="submit" class="btn btn-primary " name="update">update</button>
      </div>
      
    </form>
   <br>
  </div>
</div>
</div> 
</div>
</section>


<?php

if(isset($_POST['update'])){
    $Aid=$_POST['id'];
    $Aname=$_POST['artName'];
   // $Ayear=$_POST['year'];
    $Aprice=$_POST['price'];

    if($_POST['artName']!=null && $_POST['price']!=null)
    {
      //  echo"<script>alert('information will be updated');location.href='updateArtinfo.php'</script>";
    $sql1="update `artwork` set `artwork`.`Art_name`='$Aname',`artwork`.`price`='$Aprice' where `artwork`.`Art_id`='$Aid'";    
    }else if($_POST['artName']!=null && $_POST['price']==null)
    {
    $sql1="update `artwork` set `artwork`.`Art_name`='$Aname' where `artwork`.`Art_id`='$Aid'";
    }else if($_POST['price'] !=null&&$_POST['artName']==null)
    {
    $sql1="update `artwork`set `artwork`.`price`='$Aprice' where `artwork`.`Art_id`='$Aid'";
    }

    $q=mysqli_query($con,$sql1);
    if($q){
        echo"<script>alert('information updated');location.href='updateArtinfo.php'</script>";
    }
    else{
        echo"<script>alert('updated failed');location.href='updateArtinfo.php'</script>";
    }


}

?>

</body>
</html>







