<?php
include('connection.php');

$sql="select Art_url from artwork where Art_id= 9";
$query = mysqli_query($con,$sql);
//$row = mysqli_num_rows($query);
while($elem=mysqli_fetch_assoc($query)){
$url=$elem['Art_url'];
echo" <img src=$url alt='image' class='img-fluid pb-3'>";

}

?>