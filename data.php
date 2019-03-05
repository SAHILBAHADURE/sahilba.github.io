<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sahil";
$conn=new mysqli($servername,$username,$password,$dbname);

$query = "SELECT `contact` FROM `user` WHERE contact = '".mysqli_real_escape_string($conn, $_POST['fname1'])."'";
$result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            echo "<p>This contact is already registered please try another one</p>";

        }
        else{
            $query = "INSERT INTO `user` (`Custname`, `contact`) VALUES ('".mysqli_real_escape_string($conn, $_POST['fname'])."', '".mysqli_real_escape_string($conn, $_POST['fname1'])."')";

            if (mysqli_query($conn, $query)) {

                echo "<p>Congratulations your record is saved!";

            } else {

                echo "<p>There was a problem in registering - please try again later.</p>";

            }
        }

?>
