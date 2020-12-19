<?php
include('connection.php');
include('navbar.php');

if (isset($_POST['search'])) {
    $search = $_POST['searchtxt'];
    //$search = preg_replace('#[^0-9]#i', '', $_POST['searchtxt']);
    $query = "select * from artwork where Art_name like '%$search%'";
    //$query2 = "select * from artist where name like '%search%' or Last_name like '%$search%'";
    $result1 = mysqli_query($con, $query);
    //$result2 = mysqli_query($con, $query2);
    $num_rows = mysqli_num_rows($result1);
    //$num_rows2 = mysqli_num_rows($result2);
    if ($num_rows == 1) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $url = $row1['Art_url'];
            $name = $row1['Art_name'];
            $year = $row1['Year_of_making'];


?>

<div class="row justify-content-center p-3"> Showing result for <?php echo $search?></div>
            <div class="col-lg-4  col-md-4 col-12 pb-4 position-static  rounded-lg ">
                <div class="card container-sm">
                    <!-- <div class="view overlay hm-white-slight"> -->
                    <a href="<?php echo $url ?>" class=" "></a>
                    <img src="<?php echo $url ?>" alt="image" class="img-responsive pb-3 " width="100%" height="300vp">
                    </a>
                    <!-- </div> -->
                    <div class="m-2 initialism">
                        <h4 class="card-title text-center"><?php echo $name ?></h4>
                    </div>
                    <p class="card-text text-center">
                        <?php echo "Art Name :" . $name ?></br>
                        <?php //echo "Art By :" . $Aname . " " . $lastname 
                        ?></br>
                        <?php echo " Created On :" . $year ?> </br>
                        <?php //echo " Price :" . $price
                        ?>
                </div>
            </div>

<?php

        }
    }


    // if ($num_rows2 == 1) {
    //     while ($row2 = mysqli_fetch_assoc($result2)) {
    //         $name
    //     }
    // }
}


include('footer.php');
?>

