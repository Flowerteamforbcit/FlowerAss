<?php
session_start();
require 'db.php';
include 'head.php';
require 'aboutProduct.php';
?>
<div id="content">

    <div id="shoppingCartContainer" class="table-responsive">
        <table id="productTable" class="table">
            <thead>
                <tr class="active">
                    
                    <th></th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Add</th>

                </tr>
            </thead>
            <tbody id="productslist">
                <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->


                <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
            </tbody>
        </table>


        <input type="button" value="Start Cart" id="startCart"/>
        <input type="button" value="Cancel Cart" id="cancelCart"/>

        <h2>Cart Summary</h2>
        <p id="DBchecking"></p>
        <ul id="shoppingCart">
            <!--<li data-item-qty="1" data-item-sku="sk-438s3x">Coffee Cup (1) &#160;
            <input type="button" data-remove-button="remove" value="X"/></li>-->
        </ul>
        <input type="button" value="Check Out" id="checkoutcart"/>
        <span style="display: inline; font-size: 8pt;"><i>You'll see taxes and other shipping costs (ha ha) during
            checkout.</i></span>

        </div>
    </div>
    <div id='msgs'></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/shcart.js"></script>

    <?php

    include 'footer.php';
    ?>
