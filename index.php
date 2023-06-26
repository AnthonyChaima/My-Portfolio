<?php

require_once 'conn.php';
$sql="SELECT * FROM images WHERE product_id>4 AND product_id<9";
$all_images=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer type="text/javascript" src="script.js"></script>

        <title>
            Welcome To My Portifolio
        </title>
    </head>

    <body>
 
        <div class="topnav">
            <?php
                include_once 'topnav.php';
            ?>

            <div class="info">

                <div class="halla">
                    <script>
                        var welcome;
                        var date = new Date();
                        var hour = date.getHours();
                        var minute = date.getMinutes();
                        var second = date.getSeconds();
                        if (minute < 10){
                            minute = "0" + minute;
                        }
                        if (second < 10){
                            second = "0" + second;
                        }
                        if (hour < 12){
                            welcome = "Good Morning";
                        }
                        else if (hour < 17){
                            welcome = "Good Afternoon";
                        }
                        else {
                            welcome = "Good Evening";
                        }
                        document.write("<h2>" + welcome + " " + "& Welcome!" +"<br>" + "<br>");
                    </script>
                </div>

                <h1>I'm Anthony <span>Chaima</span></h1>
                <p>
                    This is my official portifolio website.<br>
                    It contains my Details, Skills and Projects
                </p>

            </div>

        </div>

        <div class="slider">
            <?php
            while($row=mysqli_fetch_assoc($all_images)){
            ?>
            <div class="slides">
                <input type="radio" name="radiobtn" id="radio1">
                <input type="radio" name="radiobtn" id="radio2">
                <input type="radio" name="radiobtn" id="radio3">
                <input type="radio" name="radiobtn" id="radio4">

                <div class="slide first">
                    <img src="<?php echo $row["product_image"]; ?>" width="50%" alt="">
                </div>

                <div class="slide">
                    <img src="images/image2.jpg" width="50%" alt="">
                </div>

                <div class="slide">
                    <img src="images/image3.jpeg" width="50%" alt="">
                </div>

                <div class="slide">
                    <img src="images/image4.jpeg"  width="50%" alt="">
                </div>

                <div class="navigationauto">
                    <div class="autobtn1"></div>
                    <div class="autobtn2"></div>
                    <div class="autobtn3"></div>
                    <div class="autobtn4"></div>
                </div>

            </div>

            <div class="navigationmanual">
                <label for="radio1" class="manualbtn"></label>
                <label for="radio2" class="manualbtn"></label>
                <label for="radio3" class="manualbtn"></label>
                <label for="radio4" class="manualbtn"></label>
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