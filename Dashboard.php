<?php
session_start();
require 'db.php';
include 'head.php';
?>
<div class="jumbotron">
<h1>Dashboard</h1>



<div id="content"  class="Absolute-Center table-responsive">
    <h2>Customers</h2>
        <table class="table" id="users" >
            <thead>
            <tr>
                <th class="id_header" style="width: 5%"><span>id</span></th>
                <th class="name_header" style="width: 25%"><span>Login</span></th>
                <th class="email_header" style="width: 20%"><span>Email</span></th>
                <th class="password_header" style="width: 20%"><span>Password</span></th>
                <th class="delete_header" style="width: 10%"><span>Delete</span></th>
                <th class="delete_header" style="width: 10%"><span>Update</span></th>
            </tr>
            </thead>

            <tbody id='userrows'>
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
            <tr>
                <td class="id"><span>aaa</span></td>
                <td class="name"><span>aaa</span></td>
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

                data: {action: "delete", name: loginValue},
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
            var editedLogin = $(this).parent().parent().find(".name span").text();


            $.ajax({
                url: "./users.php",
                type: "POST",
                dataType: 'json',
                data: {action: "update", id: loginValue, newLogin: editedLogin},
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
            //name changing field
            if($td.attr('class') === 'name') {
                //var val = $(this).html();
                $td.html('<input type="text" value="' + val + '"/>');
                $input = $td.find('input');
                $input.focus();
                $input.select();
            }
            //Email changing field

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
include 'footer.php';
?>
