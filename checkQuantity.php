<?php

require_once('init.php');
loadScripts();

$data = array("status" => "not set!");

if (Utils::isGET()) {
    $pm = new ProductManager();
    $rows = $pm->findProduct($_GET["check"]);

    $data = "";

    $sku = $rows['SKU'];
    $price = $rows['item_price'];
    $desc = $rows['description'];
    $quantity = $rows['Quantity'];

    $data = array("sku" => $sku, "price" => $price, "quantity"=>$quantity);
    

} else {
    $data = array("status" => "error", "msg" => "Only GET allowed.");

}
echo json_encode($data);
?>
