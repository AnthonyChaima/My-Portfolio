<?php

$servername="localhost";
$username="root";
$password="";
$myDB="myportdb";
$conn=mysqli_connect($servername,$username,$password,$myDB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer type="text/javascript" src="script.js"></script>
    <title>Top Navigation</title>
</head>
<body>

    <nav>
        <a href="index.php"><img src="images/logoo.png" class="logo" width="200px"></a>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="project.php">PROJECTS</a></li>
                <li><a href="skills.php">SKILLS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
    </nav>
    
</body>
</html>