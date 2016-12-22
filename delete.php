<?php


$userID = mysql_real_escape_string($_GET['id']);

 $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbName = "testdb";


    $conn = new mysqli($servername, $username, $password, $dbName);
    
    $sql="DELETE FROM student WHERE id = '$userID'";
    $result = $conn->query($sql);

    if($result) {
      echo "Record № $userID successfully  deleted";
    } else {

      echo "Error";
    }
header('refresh:2;url=index.php');




?>