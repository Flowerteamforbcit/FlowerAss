<<?php
session_start();
require 'db.php';
include 'head.php';
?>

<?php
if(isset($_POST['submit'])){
    $errMsg = '';
        //username and password sent from Form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == '')
        $errMsg .= 'You must enter your Username<br>';

    if($password == '')
        $errMsg .= 'You must enter your Password<br>';


    if($errMsg == ''){
        $records = $dbh->prepare('SELECT id,name,pw FROM  customer WHERE name = :username');
        $records->bindParam(':username', $username);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        if(($username == "harry") && count($results) > 0 && ($password == $results['pw'])){

            $_SESSION['username'] = $results['name'];
            header('location:dashboard.php');

            exit;
        }else if(count($results) > 0 && ($password == $results['pw'])){
            $_SESSION['username'] = $results['name'];
            header('location:homepage.php');

            exit;

        }else{
            $errMsg .= 'Username and Password are not found<br>';
        }
    }
}

?>



    


    <div class="container col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4">
        <h2>Log In</h2>
        <?php
        if(isset($errMsg)){
            echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
        }
        ?>
        <form action="" method="post">
          <fieldset class="form-group">
            <label>User name</label><input type="text" class="form-control" name="username">
        </fieldset>
        <fieldset class="form-group">
            <label>Password</label><input type="password" class="form-control" name="password" placeholder="Password">
        </fieldset>
        <button type="submit" name ='submit' class="btn btn-primary">Log in</button>
    </div>

    <!-- footer -->
    <?php 

    include 'footer.php';
    ?>