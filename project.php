<?php

require_once 'conn.php';
$sql="SELECT * FROM images WHERE product_id>4 AND product_id<11";
$all_images=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer type="text/javascript" src="script.js"></script>
        <title>
            My Projects
        </title>
    </head>

    <body>

        <div class="topnav">
            <?php
            include_once 'topnav.php';
            ?>
            <h3>Click on Project Photos for more </h3>
            <br><br>
        </div>
        
        <div class="grid">
             <?php
                while($row=mysqli_fetch_assoc($all_images)){
            ?>
            <img src="<?php echo $row["product_image"]; ?>" onclick="openPopup()">
            

            <div class="popup" id="popup">
                <h2> <?php echo $row["Description"]; ?></h2>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
            <?php
                }
            ?>
        </div>
        
        <div class="footerbottom">
            <p>Copyright&copy;2023; Designed by <span class="designer">Anthony</span></p>
        </div>

    </body>
</html>