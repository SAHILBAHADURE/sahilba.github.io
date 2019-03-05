<?php
$conn=mysqli_connect("localhost","root","","sahil");
$sql="DELETE  FROM user WHERE contact='$_GET[id]' ";
if(mysqli_query($conn,$sql))
{
header("refresh=1; url=PhoneDirectory.php");
echo "Your record is deleted successfully.";
}
else 
{
echo "Not deleted";
}
?>