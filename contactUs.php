<?php
session_start();
require 'db.php';
include 'head.php';
?>


    <div class="container" align="center">

        <h2>Get In Touch</h2>
        <p>We'd love to hear from you! Send us a message using the form below, or email us</p>
        <!--        <p>-->
        <!--            <a href="mailto:zgp7777@gmail.com">Send Mail</a>-->
        <!--        </p>-->
        <hr/>

        <?php

        # basic pdo connection (with added option for error handling)
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (!$_POST['name'] || !$_POST['email'] || !$_POST['message']) {
                echo "<p>Please supply all of the data! You may press your back button to attempt again minion!</p>";
                exit;
            } else {

                try {

                    $STH = $dbh->prepare("INSERT INTO contact (name,email,message) VALUES (:name,:email,:message)");

                    $STH->bindParam(':name', $_POST['name']);
                    $STH->bindParam(':email', $_POST['email']);
                    $STH->bindParam(':message', $_POST['message']);

                    $STH->execute();

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                echo "<p><strong>submitted successfully</strong></p>";

            }
        }

        # close the connection
        $dbh = null;
        ?>

        <form id="ajax-contact" class="col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4" method="post"
              action="">
            <fieldset class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <small class="text-muted">We'll never share your email with anyone else.</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="message">Tell us your story</label>
                <textarea class="form-control" id="message" name="message" required rows="3"></textarea>
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>



<?php

include 'footer.php';
?>