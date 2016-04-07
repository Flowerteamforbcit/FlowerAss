<?php
session_start();
require 'db.php';
include 'head.php';
?>

<div class="jumbotron">
    <h1>Dashboard</h1>

    <div class="table-responsive">
        <h2>Customers</h2>
        <table class="table" id="users">
            <thead>
            <tr class="active">
                <th class="id_header"><span>id</span></th>
                <th class="login_header"><span>Login</span></th>
                <th class="email_header"><span>Email</span></th>
                <th class="password_header"><span>Password</span></th>
                <th class="delete_header"><span>Delete</span></th>
                <th class="update_header"><span>Update</span></th>
            </tr>
            </thead>

            <tbody id='userrows'>
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->

            </tbody>
        </table>
        <form class="form-inline" id="addNewUser">
            <div class="form-group">
                <input id="addLogin" class="form-control" type="text" placeholder="User name" required="required"/>
            </div>
            <div class="form-group">
                <input id="addEmail" class="form-control" type="email" placeholder="Email" required="required"/>
            </div>
            <div class="form-group">
                <input id="addPw" class="form-control" type="text" placeholder="Password" required="required"/>
            </div>
            <button type="submit" class="btn btn-default">Add</button>

        </form>
    </div>

    <div class="table-responsive">
        <h2>Products</h2>
        <table class="table" id="products">
            <thead>
            <tr class="active">
                <th class="id_header"><span>SKU</span></th>
                <th class="login_header"><span>Item Price</span></th>
                <th class="email_header"><span>Description</span></th>
                <th class="password_header"><span>Image path</span></th>
            </tr>
            </thead>

            <tbody id='productsrows'>
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->

            </tbody>
        </table>
        <form class="form-inline" id="addNewProduct">
            <div class="form-group">
                <input id="addSKU" class="form-control" type="text" placeholder="SKU" required="required"/>
            </div>
            <div class="form-group">
                <input id="addPrice" class="form-control" type="text" placeholder="Price" required="required"/>
            </div>
            <div class="form-group">
                <input id="addDescription" class="form-control" type="text" placeholder="Name" required="required"/>
            </div>
            <div class="form-group">
                <input id="addPath" class="form-control" type="text" placeholder="Image path" required="required"/>
            </div>
            <button type="submit" class="btn btn-default">Add</button>

        </form>
    </div>
<!--    --><?php
//
//    try {
//
//    $sql = "SELECT * FROM product";
//
//    $statement = $dbh->prepare($sql);
//    $statement->execute();
//    // $count = $statement->rowCount();
//    // echo "Number of returned values is $count.";
//
//    // PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
//    // http://php.net/manual/en/pdostatement.fetch.php
//    // basically we want an associate array for each row
//    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//    // http://stackoverflow.com/questions/15287905/convert-pdo-recordset-to-json-in-php
//    // echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
//
//    ?>
<!--    <h2>Products</h2>-->
<!--    <table id="product">-->
<!---->
<!--        <tr>-->
<!--            <th>SKU</th>-->
<!--            <th>Item Price</th>-->
<!--            <th>Description</th>-->
<!--            <th>path</th>-->
<!--        </tr>-->
<!---->
<!--        --><?php
//        foreach ($rows as $row) {
//            # code...
//            echo "<tr>";
//            echo "<td>" . $row['SKU'] . "</td>" . "<td>" . $row['item_price'] . "</td>" . "<td>" .
//                $row['description'] . "</td>" . "<td>" . $row['path'] . "</td>";
//            echo "</tr>";
//
//        }
//        echo "</table>";
//
//
//        } catch (PDOException $e) {
//            echo "<p style='color: red;'>From the SQL code: $sql</p>";
//            $error = $e->getMessage();
//            echo "<p style='color: red;'>$error</p>";
//        }
//
//
//        ?>


</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>

    $(document).ready(function () {

        function loadUsers() {
            $.ajax({
                url: "./users.php",
                type: "GET",
                dataType: 'html',
                success: function (returnedData) {
                    //console.log("cart checkout response: ", returnedData);
                    $("#userrows").html(returnedData);
                    //window.location.href = "user-editor.html";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.statusText, textStatus);
                }
            });
        }

        loadUsers();


        function loadProducts() {
            $.ajax({
                url: "./products.php",
                type: "GET",
                dataType: 'html',
                success: function (returnedData) {
                    //console.log("cart checkout response: ", returnedData);
                    $("#userrows").html(returnedData);
                    //window.location.href = "user-editor.html";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.statusText, textStatus);
                }
            });
        }

        loadUsers();


        $("#addNewUser").submit(function (e) {
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
                data: {
                    action: "add", newLogin: Login,
                    newEmail: Email, newPw: Pw
                },
                success: function (returnedData) {
                    loadUsers();
                    console.log(returnedData);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#p1").text(jqXHR.statusText);
                }

            });

        });

        $('#users').on('click', '.delete', function () {
            var loginValue = this.getAttribute("id");
            loginValue = loginValue.replace("d-", "");

            $.ajax({
                url: "./users.php",
                type: "POST",
                dataType: 'json',
                data: {action: "delete", username: loginValue},
                success: function (returnedData) {
                    loadUsers();

                    //window.location.href = "user-editor.html";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.statusText, textStatus);
                }
            });

        });

        $('#users').on('click', '.update', function () {
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
                success: function (returnedData) {
                    loadUsers();

                    //window.location.href = "user-editor.html";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.statusText, textStatus);
                }
            });

        });


        // http://stackoverflow.com/questions/11882693/change-table-cell-from-span-to-input-on-click
        $('#users').on('click', 'span', function () {

            var $td = $(this).parent();
            var $input = null;

            var val = $(this).html();

            if ($td.attr('class') === 'login') {
                //var val = $(this).html();
                $td.html('<input type="text" value="' + val + '"/>');
                var $input = $td.find('input');
                $input.focus();
                $input.select();
            }

            if ($input != null) {

                $input.on('blur', function () {
                    $(this).parent().html('<span>' + $(this).val() + '</span>');
                });

                $input.keyup(function (e) {
                    if (e.which == 13) {
                        $(this).parent().html('<span>' + $(this).val() + '</span>');
                    } else if (e.which == 27) {
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
