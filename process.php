<?php
require 'db.php';
switch($_GET['mode']){
    case 'insert':
        $stmt = $dbh->prepare("INSERT INTO customer (name, email, pw, created) VALUES (:username, :useremail, :pw, now())");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':useremail',$useremail);
        $stmt->bindParam(':pw',$userpassword);

        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];
        $stmt->execute();
        header("Location: congrats.php"); 
        break;
    // case 'delete':
    //     $stmt = $dbh->prepare('DELETE FROM topic WHERE id = :id');
    //     $stmt->bindParam(':id', $id);

    //     $id = $_POST['id'];
    //     $stmt->execute();
    //     header("Location: list.php"); 
    //     break;
    // case 'modify':
    //     $stmt = $dbh->prepare('UPDATE topic SET title = :title, description = :description WHERE id = :id');
    //     $stmt->bindParam(':title', $title);
    //     $stmt->bindParam(':description', $description);
    //     $stmt->bindParam(':id', $id);

    //     $title = $_POST['title'];
    //     $description = $_POST['description'];
    //     $id = $_POST['id'];
    //     $stmt->execute();
    //     header("Location: list.php?id={$_POST['id']}");
    //     break;
}

// this php used to used for sign up DB process. however i've moved it to signup.php so 
// we might not need it anymore
?>

