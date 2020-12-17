<?php
include('navbar.php');
include('connection.php');
?>

<div class="container p-5 ">
  <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
    <div class=" justify-content-center bg-light p-5 mx-5">
    <h2 class="text-center">Contact Us</h2>
    <div class="container-luid ">
    <form action="#" method="POST" class="justify-content-center" id="cntus">

    <div class="form-group">
       <label for="name">Name</label>
       <input type="Text" class="form-control" id="name" placeholder="Enter your name" name="name">
      </div>

     <div class="form-group">
       <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      
      <div class="form-group">
       <!-- <label for="name">Name</label> -->
       <textarea rows="4" cols="105" name="comment" form="cntus" placeholder="Enter your comment here...."></textarea>
      </div>

      </div>
      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
      <button type="reset" class="btn btn-danger " name="reset"  href="#"> Reset</button>
      <button type="submit" class="btn btn-primary " name="submit">Submit</button>
      </div>
      
    </form>
   <br>

  </div>
</div>
</body>

</html>


<?php
if(isset($_POST['submit']))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feed=$_POST["comment"];
        $sql="insert into contact_us(name,email,feedback)values('$name','$email','$feed')";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);
        if($query){
            echo"<script> alert('We appreciate your feedback');location.href='index.php'; </script>";
        } else
        {
            echo"<script> alert('There was some Problem');location.href='index.php'; </script>";

        }     
 }

?>












<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
