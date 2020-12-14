<?php 
include('navbar.php')
?>

<body class="bg-light">

<div class="container p-5  ">
  <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
    <div class=" justify-content-center bg-light p-5 mx-5">
    <h2 class="text-center">Add Artwork</h2>
    <div class="container-fluid">
    <form action="#" method="POST" class="justify-content-center">
     <div class="form-group">
       <label for="text">Art Name</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter Art Name " name="artName">
      </div>
      <div class="form-group">
       <label for="file">Select file:</label>
       <input type="file" class="form-control" id="file" placeholder="select file" name="selectFile">
      </div> 
      <div class="form-group">
       <label for="text">Year of making</label>
       <input type="date" class="form-control"  id="date" placeholder="Enter Year of making " name="year">
      </div>

      <div class="form-group">
       <label for="text">price</label>
       <input type="text" class="form-control"  id="text" placeholder="Enter the price " name="price">
      </div>

      </div>
      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
      <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button>
      <button type="submit" class="btn btn-primary " name="submit">Submit</button>
      </div>
      
    </form>
   <br>
    <h5>OR  <a href="Custsignup.php">create account</a></h5>

  </div>
</div>
</body>
</html>

<?php
include('connection.php');
if(isset($_POST['submit']))
{
     $artname=$_POST['artName'];  
     $file=$_POST['selectFile'];
     $year=$_POST['year'];
    $price=$_POST['price']; 

    $sql= "INSERT INTO `artwork` (`Art_name` , `Art_url` , `Year_of_making` , `price` ) values('$artname' , '$file' , '$year' , '$price' )";
    $result=mysqli_query($con,$sql);
    if(!$result)
    {
        echo"<script>alert('Record was not inserted');location.href='addArtWork.php';</script>";
    }  
    else{
        $artid=mysqli_insert_id($con);
        $aid=$_SESSION['aId'];
        $res=mysqli_query($con,"INSERT INTO `created_by` (`artist_id` , `Art_id`) values('$aid' , '$artid')");
        echo"<script>alert('Artwork added successfully');location.href='addArtwork.php';</script>";
    }
}





?>