<?php
require_once 'conn.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>
            My Profile
        </title>
    </head>

    <body>

        <div class="topnav">
            <?php
                include_once 'topnav.php';
            ?>
        </div>

        <div class="card">
            <div class="side">
                <img src="images/anthony.png" alt="Image">
                <div class="profilecontainer">
                    <h1>ANTHONY CHAIMA</h1><br>
                    <h4><span>WEB DEVELOPER</span> | <span>PROGRAMMER</span> | <span>COMPUTER NETWORK ENGINEER</span> | 
                        <span>SOFTWARE DEVELOPER</span>
                    </h4><br>
                    <p>I am a professional programmer, software developer, computer network engineer,  web designer and developer.
                        Currently I am doing my Bachelors of Science in Information and Communication Technology at Mzuzu University.<br><br>
                        My enthusiasm for Technology has enabled me to learn new things about Technology each and everyday. 
                        I am readily available if you want me to help you on your different projects,
                        and i can be contacted using the link below.<br><br>
                        <a href="contact.php">Contact Me</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="footerbottom">
            <p>Copyright&copy;2023; Designed by <span class="designer">Anthony</span></p>
        </div>

    </body>
</html>