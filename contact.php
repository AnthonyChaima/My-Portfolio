<?php
    require_once 'conn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <title>
            Contact Me
        </title>
    </head>

    <body>
        <div class="topnav">
            <?php
                include_once 'topnav.php';
            ?>

            <section class="contact">
                <div class="content">
                    <h2>Contact Me</h2>
                </div>

                <div class="container">
                    <div class="contactInfo">
    
                        <div class="box">
                            <div class="icon"><img src="images/pin.png" width="30px"></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Mzuzu,<br>Mchengautuba,<br>Bishop Residents</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="icon"><img src="images/contact.png" width="30px"></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+265997546008</p>
                            </div>
                        </div>
    
                        <div class="box">
                            <div class="icon"><img src="images/whatsapp.png" width="30px"></div>
                            <div class="text">
                                <h3>WhatsApp</h3>
                                <p><a href="https://wa.me/+265882138072" target="_blank">+265882138072</a></p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="icon"><img src="images/facebook.png" width="30px"></div>
                            <div class="text">
                                <h3>Facebook</h3>
                                <p><a href="https://www.facebook.com/anthony.chaima.5" target="_blank">Chaima Anthony</a></p>
                            </div>
                        </div>
    
                        <div class="box">
                            <div class="icon"><img src="images/email.png" width="30px"></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p><a href="mailto:chaimadeputy@gmail.com" target="_blank">chaimadeputy@gmail.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="contactForm">
                        <form action="formsubmit.php" method="post">
                            <h2>Send Message</h2>

                            <div class="inputBox">
                                <input type="text" name="fullName" autocomplete="off" required="required">
                                <span>Full Name</span>
                            </div>

                            <div class="inputBox">
                                <input type="email" name="emailAddress" autocomplete="off" required="required">
                                <span>Email</span>
                            </div>

                            <div class="inputBox">
                                <textarea required="required" name="textArea"></textarea>
                                <span>Type your Message...</span>
                            </div>

                            <div class="inputBox">
                                <input type="submit" name="" value="Send">
                            </div>

                        </form>
                    </div>
                </div>
            </section>
    
        </div>
        
        <div class="footerbottom">
            <p>Copyright&copy;2023; Designed by <span class="designer">Anthony</span></p>
        </div>

    </body>
</html>