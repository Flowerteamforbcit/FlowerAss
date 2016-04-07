<?php
session_start();
include 'head.php';
?>

<?php
$connect = mysql_connect('localhost');
$database = mysql_select_db('flowershop');
$username = $_POST['root'];

    if(isset($username))
    {
        $mysql_get_users = mysql_query("SELECT * FROM table_name where username='$username'");

    $get_rows = mysql_affected_rows($connect);

    if($get_rows >=1)
    {
    echo "This username is not available.";
    die();
    }

        else
    {
            echo "This username is available.";
    }


}
?>

<?php
    if (isset($_POST['submit']))
        {
        $errMsg = '';
        
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $emailagain = trim($_POST['emailagain']);
    $password = trim($_POST['password']);
    $passwordagain = trim($_POST['passwordagain'];
        
    if ($username == '')
    {
        $errMsg = 'Please enter a valid username.';
    }
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $username))
        {
  $errMsg = 'You did not enter a valid username.';
        }
        
        elseif($email == '')
        {
            $errMsg = 'Please enter a valid email.';
        }
        
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
        {
  $errMsg = 'You did not enter a valid email.';
        }
        
        elseif($emailagain == '')
        {
            $errMsg = 'Please enter email again.';
        }
        
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailagain))
        {
  $errMsg = 'Your emails do not match.';
        }
        
        elseif($password == '')
        {
            $errMsg = 'Please enter password.';
        }
        
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $password))
        {
  $errMsg = 'You did not enter a valid password.';
        }
        
        elseif($passwordagain == '')
        {
            $errMsg = 'Please enter password again.';
        }
        
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $passwordagain))
        {
  $errMsg = 'Your passwords do not match.';
        }
                          

else
{
    echo "Signup successful.";
}
 
                          
}
?>

    <div class="container col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4">
        <h2>Sign up</h2>

        <form name="signin" action="./process.php?mode=insert" method="POST" >
          <fieldset class="form-group">
            <label for="username">Your name</label>
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