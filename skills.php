<?php
require_once 'conn.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer type="text/javascript" src="script.js"></script>
        <title>
            My Skills
        </title>
    </head>

    <body>

        <div class="topnav">
            <?php
                include_once 'topnav.php';
            ?>
        </div>

        <div class="skillcontainer">
            <div class="skillbox">
                <span class="title">HTML</span>
                <div class="skillbar">
                    <span class="skillper html">
                        <span class="tooltip">80%</span>
                    </span>
                </div>
            </div>
            <br>
            <div class="skillbox">
                <span class="title">CSS</span>
                <div class="skillbar">
                    <span class="skillper css">
                        <span class="tooltip">70%</span>
                    </span>
                </div>
            </div>
            <br>
            <div class="skillbox">
                <span class="title">JavaScript</span>
                <div class="skillbar">
                    <span class="skillper java">
                        <span class="tooltip">30%</span>
                    </span>
                </div>
            </div>
            <br>
            <div class="skillbox">
                <span class="title">C / C++</span>
                <div class="skillbar">
                    <span class="skillper c">
                        <span class="tooltip">40%</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="footerbottom">
           <p>Copyright&copy;2023; Designed by <span class="designer">Anthony</span></p>
        </div>

    </body>
</html>