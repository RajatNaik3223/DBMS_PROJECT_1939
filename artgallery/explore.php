
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
$i=0;
$count=0;
while($elem=mysqli_fetch_assoc($query)){

$url[$i]=$elem['Art_url'];
$name[$i]=$elem['Art_name'];
$year[$i]=$elem['Year_of_making'];
$price[$i]=$elem['Price'];
$id[$i]=$elem['Art_id'];


     $sql1="select `name`,`Last_name` from `artist` where `artist_id` in (select artist_id from `created_by` join `artwork` on `created_by`.`Art_id`=`artwork`.`Art_id` where `created_by`.`Art_id`='$id[$i]')";
     $result=mysqli_query($con,$sql1);  
     while($row=mysqli_fetch_assoc($result))
     {   
       $count++;
     $Aname[$i]=$row['name'];
     $lastname[$i]=$row['Last_name'];
    // $id=$row['artist_id'];
     }
?>
       
         
             <div class="col-lg-4  col-md-4 col-12 pb-4">
              <img src="<?php echo $url[$i]?>" alt="image" class="img-fluid pb-3">
              <h4 class="card-title"><?php //echo $name.$lastname?></h4>
              <p class="card-text">
              <?php echo"Art Name :".$name[$i] ?></br>
              <?php echo"Art By :".$Aname[$i]." ".$lastname[$i] ?></br>
              <?php echo" Created On :".$year[$i] ?> </br>
               <?php echo" Price ;".$price[$i] ?>   
                
                
                </p>
                <?php if(isset($_SESSION['is']) && $_SESSION['is']=='cust')
                {
                 $custid=$_SESSION['cId'];                
                ?>
              <form action="explore.php" method="post">
              <input type="submit" value="place order" name="<?php echo$i;?>"/>
              </form>
            
                <?php }?>
            </div>
         
<?php
$i++;
}
$_SESSION['count']=$count;


$j=0;
  for($j=0;$j<$count;$j++)
  {
    if(isset($_POST[$j])){
     $_SESSION['Aid']=$id[$j];
       $sql2="insert into `bought_by`(`Art_id`,`cust_id`)values('$id[$j]','$custid')";
        $q=mysqli_query($con,$sql2);
        if($q){
            echo "<script>alert('placing order');location.href='reciept.php'; </script>";
            $sql3="update `customer` set amt_spent=(amt_spent +'$price[$j]') where cust_id='$custid'";
        if($q2=mysqli_query($con,$sql3)){

          
         } 
       }
       
        else{
            echo "<script>alert('cannot place order');location.href='explore.php'; </script>";
             continue;
        }
    }

}
?>








?>
   </div>
        </div>
    
      </section>

      <footer class="p-2 bg-dark text-light text-center">
        <p>artgallery@art.com</p>
    
        </footer>
</body>
</html>







