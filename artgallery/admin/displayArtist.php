
    <?php //include("navbar.php");
    //include('../connection.php');
    ?>
    <div id="layoutSidenav_content">
<section class="my-5px">
    <div class="py-3">
        <h3 class="text-center">Artists</h3>
    </div>        
    <!-- <div class="card-body"> -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <!-- <th>Amount Spent</th> -->
                <!-- <th>Remove</th> -->
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <!-- <th>Amount Spent</th> -->
                <!-- <th>Remove</th> -->
                </tr>
                </tfoot>

                <tbody>
                <?php
                $i=0;
                $count=0;
                $sql="select * from artist";
                $query=mysqli_query($con,$sql);
                while($result=mysqli_fetch_assoc($query))
                {
                    $id[$i]=$result['artist_id'];
                    $name[$i]=$result['name'];
                    $lname[$i]=$result['Last_name'];
                    $add[$i]=$result['address'];
                    //$amt[$i]=$result['amt_spent'];

                
                ?>
                
                <tr>
                <td><?php echo$id[$i]?></td>
                <td><?php echo$name[$i]?></td>
                <td><?php echo$lname[$i] ?></td>
                <td><?php echo$add[$i] ?></td>
                <!-- <td><?php echo$amt[$i] ?></td> -->
                <!-- <td> <form action="removeUser.php" method="post" > <input class="btn btn-primary" type="submit" value="Remove" name="<?php echo$i ?>"></form> </a></td> -->
                </tr>
                <?php 
                $i++;
                $count++;
                }?>
                </tbody>
            </table>
            <!-- <div class="justify-content-center">
            <form method="POST" action="removeUser" >
            <label for="delID">Enter the id of user</label>
            <input type="text" name="delId" id="delID" value="ID" placeholder="Enter the ID of the user to remove user"\>
            
            </form>
            </div> -->
        </div>
    </div>
    <!-- </div> -->
    </section>
    
    


    </div>



<?php


// $j=0;
//   for($j=0;$j<$count;$j++)
//   {
//     if(isset($_POST[$j])){
     
//        $sql2="delete from customer where cust_id='$id[$j]' ";
//         $q=mysqli_query($con,$sql2);
//         if($q){

//           $sql3="INSERT into activity_log(identity,remark)values('Admin','Removed User')";//activity log
//           $q2=mysqli_query($con,$sql3);



//             echo "<script>alert('Customer Removed');location.href='removeUser.php'; </script>";
//        }
       
//         else{
//             echo "<script>alert('Customer was not removed');location.href='removeUser.php'; </script>";
//              continue;
//         }
//     }

// }



?>
