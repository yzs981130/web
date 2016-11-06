<?php
/**
 * Created by PhpStorm.
 * User: yzs
 * Date: 2016/10/31
 * Time: 0:11
 */
$con = mysqli_connect("localhost", "usr_2016_118", "ZXRoMCAgICAgIExpbmsgZW5jYXA6", "db_2016_118");
if(mysqli_connect_errno()){
    print "ERROR - Could not connect to MySQL";
    exit;
}

trim($_REQUEST['name']);
trim($_REQUEST['age']);
trim($_REQUEST['gender']);
trim($_REQUEST['email']);

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$email = $_REQUEST['email'];

print "<p> <b> You have post </b> name: $name, age: $age, gender: $gender, email: $email </p>";

$sql = "INSERT INTO guest(Guest_Name, Age, Gender, E_mail) VALUES ('$name', $age, '$gender', '$email')";
if(mysqli_query($con, $sql)){
    print "<p> <b> Record created. </b> </p>";
}
else{
    print "<p> <b> Record create failure. </b> </p>";
}
?>