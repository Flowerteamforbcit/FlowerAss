<?php
session_start();
require 'db.php';
include 'head.php';
?>
<h2>Dashboard</h2>



    <div id="content">

      <table id="users">
        <thead>
          <tr>
			<th class="id_header"><span>id</span></th>
            <th class="login_header"><span>Login</span></th>
            <th class="email_header"><span>Email</span></th>
            <th class="password_header"><span>Password</span></th>
            <th class="delete_header"><span>Delete</span></th>
            <th class="delete_header"><span>Update</span></th>
          </tr>
        </thead>

        <tbody id='userrows'>
          <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
          <tr>
			  <td class="id"><span>aaa</span></td>
            <td class="login"><span>aaa</span></td>
            <td class="email"><span>bbb</span></td>
            <td class="password"><span>uniqueloginname</span></td>
            <td><input id="uniqueloginname" class="delete" type="button" value="Delete"/></td>
          </tr>
        </tbody>
      </table>
      <form id="addNewUser">
        <input id="addLogin" type="text" placeholder="Login" required="required"/>
        <input id="addEmail" type="text" placeholder="Email" required="required"/>
        <input id="addPw" type="text" placeholder="Pw" required="required"/>
        <input id="submitNewUser" type="submit" value="Add"/>
      </form>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>

        $(document).ready(function() {

            function loadUsers() {
                $.ajax({
                    url: "./users.php",
                    type: "GET",
                    dataType: 'html',
                    success: function(returnedData) {
                        //console.log("cart checkout response: ", returnedData);
                        $("#userrows").html(returnedData);
                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
            }

            loadUsers();


            $("#addNewUser").submit(function(e) {
                e.preventDefault();

                // get values from form
                var Login = $("#addLogin").val();
                var Email = $("#addEmail").val();
                var Pw = $("#addPw").val();

                //console.log(Login, Email, Pw);

                $.ajax({
                    url: "users.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {action: "add", newLogin: Login,
                        newEmail: Email, newPw: Pw},
                    success: function(returnedData) {
                        loadUsers();
                        console.log(returnedData);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#p1").text(jqXHR.statusText);
                    }

                });

            });

            $('#users').on('click', '.delete', function() {
                var loginValue = this.getAttribute("id");
                loginValue = loginValue.replace("d-", "");

                $.ajax({
                    url: "./users.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "delete", username: loginValue},
                    success: function(returnedData) {
                        loadUsers();

                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });

            });
			
            $('#users').on('click', '.update', function() {
                var loginValue = this.getAttribute("id");
                //var firstName = $(this).val(
                loginValue = loginValue.replace("u-", "");
                var editedFirstName = $(this).parent().parent().find(".Login span").text();
                //console.log(loginValue, editedFirstName);

                $.ajax({
                    url: "./users.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "update", username: loginValue, newFirstName: editedFirstName},
                    success: function(returnedData) {
                        loadUsers();

                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });

            });


            // http://stackoverflow.com/questions/11882693/change-table-cell-from-span-to-input-on-click
            $('#users').on('click', 'span', function() {

                var $td = $(this).parent();
                var $input = null;

                var val = $(this).html();

                if($td.attr('class') === 'login') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }

                if($input != null) {

                    $input.on('blur', function() {
                        $(this).parent().html('<span>' + $(this).val() + '</span>');
                    });

                    $input.keyup(function(e) {
                        if(e.which == 13) {
                            $(this).parent().html('<span>' + $(this).val() + '</span>');
                        } else if(e.which == 27) {
                            // escape key, means user canceled operation
                            $(this).parent().html('<span>' + val + '</span>');
                        }
                    });
                }
            });



        });

    </script>




<?php

try {

	$sql = "SELECT * FROM customer";

	$statement = $dbh->prepare($sql);
	$statement->execute();
        // $count = $statement->rowCount();
        // echo "Number of returned values is $count.";

        // PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
        // http://php.net/manual/en/pdostatement.fetch.php
        // basically we want an associate array for each row
	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        // http://stackoverflow.com/questions/15287905/convert-pdo-recordset-to-json-in-php
        // echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));


	echo "<table>";
	echo "<h2>Customers</h2>";
	echo "<th>id</th><th>name</th><th>email</th><th>password</th>";

	foreach ($rows as $row) {
        	# code...
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>" ."<td>" . $row['name'] . "</td>" ."<td>" . $row['email'] . "</td>" . "<td>" . $row['pw'] . "</td>" ;
		echo "</tr>";

	}
	echo "</table>";


} catch(PDOException $e) {
	echo "<p style='color: red;'>From the SQL code: $sql</p>";
	$error = $e->getMessage();
	echo "<p style='color: red;'>$error</p>";
}



include 'footer.php';
?>
