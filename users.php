<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        // post means either to delete or add a user
        $parameters = new Parameters("POST");

        $action = $parameters->getValue('action');
        $login = $parameters->getValue('username');

        //$data = array("action" => $action, "login" => $login);
        if($action == 'delete' && !empty($login)) {

            $um = new UserManager();
            $um->deleteUser($login);
            $data = array("status" => "success", "msg" => "User '$login' deleted.");
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        } else if($action == 'update' && !empty($login)) {
            $newLogin = $parameters->getValue('newLogin');

            if(!empty($newLogin)) {

                $um = new UserManager();
                $count = $um->updateUserlogin($login, $newLogin);
                if($count > 0) {
                    $data = array("status" => "success", "msg" =>
                        "User '$login' updated with new first name ('$newLogin').");
                } else {
                    $data = array("status" => "fail", "msg" =>
                        "User '$login' was NOT updated with new first name ('$newLogin').");
                }
            } else {
                $data = array("status" => "fail", "msg" =>
                    "New user name must be present - value was '$newLogin' for '$login'.");

            }
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        } else if($action == 'add') {
			//$login, $email, $pw
            $newLogin = $parameters->getValue('newLogin');
            $newEmail = $parameters->getValue('newEmail');
            $newPw = $parameters->getValue('newPw');

            if(!empty($newLogin) && !empty($newEmail) && !empty($newPw)) {
                $data = array("status" => "success", "msg" => "User added.");
                $um = new UserManager();
                $um->addUser($newLogin, $newEmail, $newPw);

            } else {
                $data = array("status" => "fail", "msg" => "$newLogin,$newEmail,$newPw First name, last name, and user name cannot be empty.");
            }
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        }else {
            $data = array("status" => "fail", "msg" => "Action not understood.");
        }

        echo json_encode($data, JSON_FORCE_OBJECT);
        return;

    } else if(Utils::isGET()) {
        // get means get the list of users
        $um = new UserManager();
        $rows = $um->listUsers();
        $html = "";
        if($rows != null) {

            foreach($rows as $row) {
				 $id = $row['id'];
                $login = $row['name'];
                $email = $row['email'];
                $pw = $row['pw'];
                $html .= "<tr>
				<td class='id'><span>$id</span></td>
                  <td class='login'><span>$login</span></td>
                  <td class='email'><span>$email </span></td>
                  <td class='pw'><span>$pw</span></td>
                  <td><input id='d-$id' class='delete' type='button' value='Delete'/></td>
                  <td><input id='u-$id' class='update' type='button' value='Update'/></td>
                  </tr>";
            }
            echo $html;

        } else {
            // shouldn't be but ...
            echo 'The returned rows is "null". No user table perhaps?';
        }

        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET and POST allowed.");
        echo json_encode($data, JSON_FORCE_OBJECT);
    }



?>
