<?php
include('navbar.php');
include('connection.php');
?>

<body class="bg-light">

  <table class="table table-bordered table-content-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th colspan='5' class='text-center'>
          <h3>Remove Art</h3>
        </th>
      </tr>
      <tr class="text-center">

        <th>painting</th>
        <th>Name</th>
        <th>Date of creation</th>
        <th>Price</th>
        <th>delete</th>
      </tr>
    </thead>


    <?php
    $artistid = $_SESSION['aId'];
    $i = 0;
    $count = 0;
    $sql = "select * from `artwork` join `created_by` on `artwork`.`Art_id`=`created_by`.`Art_id` where `created_by`.`artist_id`='$artistid'";
    $query = mysqli_query($con, $sql);
    while ($elem = mysqli_fetch_array($query)) {
      $url[$i] = $elem['Art_url'];
      $name[$i] = $elem['Art_name'];
      $year[$i] = $elem['Year_of_making'];
      $price[$i] = $elem['Price'];
      $id[$i] = $elem['Art_id'];
    ?>
      <tr class="text-center">
        <td>
          <img src="<?php echo $url[$i] ?>" alt="image" class="img-fluid pb-3" height="160px" width="200px"></td>
        <td> <?php echo $name[$i] ?></td>
        <td><?php echo $year[$i] ?></td>
        <td><?php echo $price[$i] ?> </td>
        <td>
          <form action="removeArt.php" method="post">
            <!-- <input class="btn fa fa-lg" type="submit" value="Remove" name="<?php// echo $i ?>"> -->
            <button class="btn btn-danger" style="background-color:Transperent; " name="<?php echo $i ?>">
              <i class="fa fa-trash"></i>
            </button>
          </form>
        </td>
      </tr>

    <?php
      $i++;
      $count++;
    }

    $j = 0;
    for ($j = 0; $j < $count; $j++) {
      if (isset($_POST[$j])) {
        $sql1 = "delete from `artwork` where Art_id=$id[$j]";
        $query1 = mysqli_query($con, $sql1);
        if ($query1) {


          $sql2 = "INSERT into activity_log(identity,remark)values('Artist','removed art piece')";
          $q1 = mysqli_query($con, $sql2);


          echo "<script>alert('Artwork Removed');location.href='removeArt.php';</script>";
        }
      }
    }
    ?>

    <tfoot>
      <tr class="text-center">
        <th>painting</th>
        <th>Name</th>
        <th>Date of creation</th>
        <th>Price</th>
        <th>delete</th>
      </tr>
    </tfoot>
  </table>
  </br>
  </br>
  </br>
  </div>





  </div>
  <!-- <div class="container-fluid p-5  shadow-lg border-0 rounded-lg mt-5">
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
</div> -->
  <?php
  include('footer.php');
  ?>