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

    <div id="content"  class="Absolute-Center table-responsive">
        <h2>Customers</h2>
        <table class="table" id="product" >
            <thead>
            <tr>
                <th class="id_header" style="width: 5%"><span>id</span></th>
                <th class="sku_header" style="width: 25%"><span>Sku</span></th>
                <th class="item_price_header" style="width: 20%"><span>Item Price</span></th>
                <th class="description_header" style="width: 20%"><span>Description</span></th>
                <th class="path_header" style="width: 10%"><span>Path</span></th>
                <th class="qty_header" style="width: 10%"><span>Quantity</span></th>
                <th class="delete_header" style="width: 10%"><span>Delete</span></th>
                <th class="delete_header" style="width: 10%"><span>Update</span></th>
            </tr>
            </thead>
            <tbody id='productsrows'>
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
            <tr>
                <td class="id" style="width: 5%"><span>id</span></td>
                <td class="sku" style="width: 25%"><span>Sku</span></td>
                <td class="item_price" style="width: 20%"><span>Item Price</span></td>
                <td class="description" style="width: 20%"><span>Description</span></td>
                <td class="path" style="width: 10%"><span>Path</span></td>
                <td class="qty" style="width: 10%"><span>Quantity</span></td>
                <td><input id="uniqueloginname" class="delete" type="button" value="Delete"/></td>
            </tr>
            </tbody>
        </table>
        <form id="addNewProduct">
            <input id="addSku" type="text" placeholder="Sku" required="required"/>
            <input id="addItemPrice" type="text" placeholder="Item Price" required="required"/>
            <input id="addDesc" type="text" placeholder="Description" required="required"/>
            <input id="addPath" type="text" placeholder="Path" required="required"/>
            <input id="addQuantity" type="text" placeholder="Quantity" required="required"/>
            <input id="submitNewProduct" type="submit" value="Add"/>
        </form>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/userDash.js"></script>
<script src="js/prodDash.js"></script>



<?php
include 'footer.php';
?>
