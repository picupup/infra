<?php
//<<test.php>>
//erfkarimi
//2022-06-16_16:12:01
//Thema:
//
require_once("../private/dbconnection.inc.php");
#echo "$user $host $database\n";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

#echo "select * from demo where id=7";

$sql = "select * from demo";
$result = mysqli_query($conn, $sql);
if ($result){
  header("Content-Type: text/html");
  #(cat html/head.html)
}
while($row = mysqli_fetch_assoc($result)) {
  echo $row['id']." ".$row['name']."<br>\n";
}

cat html/foot.html
mysqli_close($conn);
