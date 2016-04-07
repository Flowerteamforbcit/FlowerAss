<?php
if($_POST['submit'] == 'Submit')
{


$username = $_POST['username'];
$email = $_POST['email'];
$emailagain = $_POST['emailagain'];
$password = $_POST['password'];
$passagain = $_POST['passagain'];

    if($username=='')
    {
    $error['username']= 'Please enter username <br>';
    }
    else if(!preg_match("/^[a-zA-Z0-9_]{3,16}$/", $username))
    {
    $error['username']= 'Please enter a valid username<br>';
        
    }

    if($email=='')
    {
    $error['email']= 'Please enter email <br>';
    }
    else if(!preg_match("/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/", $email))
    {
    $error['email']= 'Please enter a valid email<br>';
    }

    if($emailagain=='')
    {
    $error['emailagain']= 'Please enter email again <br>';
    }
    else if(!preg_match("/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/", $emailagain))
    {
    $error['emailagain']= 'Please enter a valid email<br>';
    }

    if($password=='')
    {
    $error['password']= 'Please enter password<br>';
    }
    else if(strlen($password)<6)
    {
    $error['password']= 'Password is too short.<br>';
    }
    if($passagain=='')
    {
    $error['passagain']= 'Please retype password again<br>';
    }
    else if($password!=$passagain)
    {
    $error['passagain']= 'Password does not match<br>';
    }

 if(count($error)==0)
    {

    }
}
?>

<html>
    <body>
            <form name="signup" action="" method="post">
    <ul><li>
    <p>Username:</p>
    <p><?php 

    if(!empty($error['username'])) echo $error['username']; ?></p>
    <p><input type="text" name="username" value="<?php if(!empty($username)) echo $username ?>" size="50" /></p>
    </li>
    <li>
    <p>Email:</p>
    <p><?php 
    
    if(!empty($error['email'])) echo $error['email']; ?></p>
    <p><input type="text" name="email" value="<?php if(!empty($email)) echo $email ?>" size="50" /></p>
    </li>
    <li><p>Re-enter Email:</p>
    <p><?php 
    
    if(!empty($error['emailagain'])) echo $error['emailagain']; ?></p>
    <p><input type="text" name="emailagain" value="<?php if(!empty($emailagain)) echo $emailagain ?>" size="50" /></p>
    </li>                    
    <li>
    <p>Password:</p>
    <p><?php 
    
    if(!empty($error['password'])) echo $error['password']; ?></p>
    <p><input type="password" name="password" value="<?php if(!empty($password)) echo $password ?>" size="50" /></p>
    </li>
    <li>
    <p>Re-enter Password:</p>
    <p><?php 
    
    if(!empty($error['passagain'])) echo $error['passagain']; ?></p>
    <p><input type="password" name="passagain" value="<?php if(!empty($passagain)) echo $passagain ?>" size="50" /></p>
    </li>
    <li>
    <p><input type="submit" name="submit" value="Submit" /></p>
    </li></ul>
            </form>
    </body>
</html>