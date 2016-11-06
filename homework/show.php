<?php
/**
 * Created by PhpStorm.
 * User: yzs
 * Date: 2016/10/31
 * Time: 1:30
 */
$con = mysqli_connect("localhost", "usr_2016_118", "ZXRoMCAgICAgIExpbmsgZW5jYXA6", "db_2016_118");
if(mysqli_connect_errno()){
    print "ERROR - Could not connect to MySQL";
    exit;
}
$query = "SELECT * from guest";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);

for($row_num = 0; $row_num < $num_rows; $row_num++){
    $row = mysqli_fetch_array($result);
    print "<p> Guest_ID: ";
    print htmlspecialchars($row["Guest_ID"]);
    print "&nbsp &nbsp Guest_Name: ";
    print htmlspecialchars($row["Guest_Name"]);
    print "&nbsp &nbsp Age: ";
    print htmlspecialchars($row["Age"]);
    print "&nbsp &nbsp Gender: ";
    print htmlspecialchars($row["Gender"]);
    print "&nbsp &nbsp Email: ";
    print htmlspecialchars($row["E_mail"]);
    print "</p><br /> <br />";
}