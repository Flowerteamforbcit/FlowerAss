<?php
session_start();
include 'head.php';
?>


    <div class="container col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4">
        <h2>Sign up</h2>

        <form name="signin" action="./process.php?mode=insert" method="POST" >
          <fieldset class="form-group">
            <label for="usename">Your name</label>
            <input type="text" class="form-control" name="username" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="usermail">Email</label>
            <input type="email" class="form-control" name="useremail" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="emailagain">Email again</label>
            <input type="email" class="form-control" name="emailagain" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="userpassword" placeholder="At least 6 characters" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="passwordagain">Password again</label>
            <input type="password" class="form-control" name="passwordagain" placeholder="Retype the password" required>
        </fieldset>
        <button type="submit" name ='submit' class="btn btn-primary">Log in</button>
        <p>Already have an account?<a href="login.php">Log in</a></p>
    </div>

    <?php 

    include 'footer.php';
    ?>