<?php
include('connection.php');
include('navbar.php');
if(isset($_SESSION['cId']))
{


$CID = $_SESSION['cId'];
$sql = "select * from customer where cust_id='$CID'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) == 1) {

    while ($row = mysqli_fetch_assoc($query)) {

        $image = $row['profileIMG'];
        $name = $row['name'];
        $lname = $row['Last_name'];
        $address = $row['address'];
        $email = $row['username'];
        $pass = $row['password'];
    }
}
?>

<table class="table table-content-center table-border-0" id="dataTable" width="60%" cellspacing="0">
    <thead>
        <tr>
            <th colspan='5' class='text-center'>
                <h3></h3>
            </th>
        </tr>
    <tbody class="text-center">
        <tr>
            <td colspan='2'><div class="container"><img src="<?php echo$image?>" alt="Profile" class="rounded-circle mx-auto d-block" width="20%" height="20%">
            <form action="profile.php" method="post"><button type="submit" name="updateImage"></button></form>
        </div></td>
        </tr>
        <tr>
            <td><form action="#"><label for="name"> name:</label></form></form> </td>
            <td><?php echo$name.' '.$lname?></td>

        </tr>
        <tr>
        <td><form action="#"><label for="Address"> address:</label></form></form> </td>
            <td><?php echo $address?></td>
        </tr>
        <tr>
        <td><form action="#"><label for="Address"> email:</label></form></form> </td>
        <td><?php echo $email?></td>
        </tr>

        <!-- <tr>
        <td><form action="#"><label for="Address"> password:</label></form></form> </td>
        <td class="visibility: hidden"><?php //echo $pass?></td>
        </tr> -->

    </tbody>

</table>
</br>
</br>
</br>
</div>
<?php
}
else if(isset($_SESSION['aId']))
{
    $AID = $_SESSION['aId'];
    $sql = "select * from artist where artist_id='$AID'";
    $query = mysqli_query($con, $sql);
    if (mysqli_num_rows($query) == 1) {
    
        while ($row = mysqli_fetch_assoc($query)) {
    
            $image = $row['profileIMG'];
            $name = $row['name'];
            $lname = $row['Last_name'];
            $address = $row['address'];
            $email = $row['username'];
            $pass = $row['password'];
        }
    }
    


?>

<table class="table table-content-center table-border-0" id="dataTable" width="60%" cellspacing="0">
    <thead>
        <tr>
            <th colspan='5' class='text-center'>
                <h3></h3>
            </th>
        </tr>
    <tbody class="text-center">
        <tr>
            <td colspan='2'><div class="container"><img src="<?php echo$image?>" alt="profile" class="rounded-circle mx-auto d-block" width="20%" height="20%">
            <form action="profile.php" method="post"><button type="submit" name="updateImage"></button></form>
        </div></td>
        </tr>
        <tr>
            <td><form action="#"><label for="name"> name:</label></form></form> </td>
            <td><?php echo$name.' '.$lname?></td>

        </tr>
        <tr>
        <td><form action="#"><label for="Address"> address:</label></form></form> </td>
            <td><?php echo $address?></td>
        </tr>
        <tr>
        <td><form action="#"><label for="Address"> email:</label></form></form> </td>
        <td><?php echo $email?></td>
        </tr>

        <!-- <tr>
        <td><form action="#"><label for="Address"> password:</label></form></form> </td>
        <td class="visibility: hidden"><?php //echo $pass?></td>
        </tr> -->

    </tbody>

</table>
</br>
</br>
</br>
</div>

<?php }

include('footer.php')

?>

