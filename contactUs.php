<?php
session_start();
require 'db.php';
include 'head.php';
?>

    
    <div class="container" align="center">

        <h2>Get In Touch</h2>
        <p>We'd love to hear from you! Send us a message using the form below, or email us</p>
        <p>
            <a href="mailto:zgp7777@gmail.com">Send Mail</a>
        </p>
        <hr/>


        <form class="col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4">
          <fieldset class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
            <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>

        
        <fieldset class="form-group">
            <label for="exampleTextarea">Tell us your story</label>
            <textarea class="form-control" id="contents" rows="3"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




</div>

<?php 

include 'footer.php';
?>