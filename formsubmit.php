<?php

$fullName = $_POST['fullName'];
$emailAddress = $_POST['emailAddress'];
$textArea = $_POST['textArea'];
$servername="localhost";
$username="root";
$password="";
$myDB="myportdb";
$conn=mysqli_connect($servername,$username,$password,$myDB);
$stmt = $conn->prepare("insert into usermessages(fullName, Email, Message) values(?, ?, ?)");
$stmt->bind_param("sss",$fullName, $emailAddress, $textArea);
$stmt->execute();
echo "<h1>Message Sent Successfully...</h1>";
$stmt->close();
$conn->close();

?>