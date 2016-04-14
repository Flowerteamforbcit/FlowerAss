<?php

require_once('init.php');
loadScripts();

$data = array("status" => "not set!");

if(Utils::isPOST()) {
    // post means either to delete or add a user
    $parameters = new Parameters("POST");

    $action = $parameters->getValue('action');
    $sku = $parameters->getValue('sku');
    $id = $parameters->getValue('id');

    //$data = array("action" => $action, "name" => $login);
    if($action == 'delete' && !empty($id)) {

        $pm = new ProductManager();
        $pm->deleteProduct($id);
        $data = array("status" => "success", "msg" => "Product '$id' deleted.");
        echo json_encode($data, JSON_FORCE_OBJECT);
        return;

    } else if($action == 'update' && !empty($id)) {
        $newSku = $parameters->getValue('newSku');

        if(!empty($newSku)) {

            $pm = new ProductManager();
            $count = $pm->updateProductSku($id, $newSku);
            if($count > 0) {
                $data = array("status" => "success", "msg" =>
                    "User '$id' updated with new first name ('$newSku').");
            } else {
                $data = array("status" => "fail", "msg" =>
                    "User '$id' was NOT updated with new first name ('$newSku').");
            }
        } else {
            $data = array("status" => "fail", "msg" =>
                "New user name must be present - value was '$newSku' for '$id'.");
        }
        echo json_encode($data, JSON_FORCE_OBJECT);
        return;

    }   else if($action == 'add') {
        //$login, $email, $pw
        $newSku = $parameters->getValue('newSku');
        $newItemPrice = $parameters->getValue('newItemPrice');
        $newDesc = $parameters->getValue('newDesc');
        $newPath = $parameters->getValue('newPath');
        $newQuantity = $parameters->getValue('newQuantity');

        if(!empty($newSku) && !empty($newItemPrice) && !empty($newDesc) && !empty($newPath) && !empty($newQuantity)) {
            $data = array("status" => "success", "msg" => "User added.");
            $pm = new ProductManager();
            $pm->addProduct($newSku, $newItemPrice, $newDesc, $newPath, $newQuantity);

        } else {
            $data = array("status" => "fail", "msg" => " $newSku, $newItemPrice, $newDesc, $newPath, $newQuantity Fields cannot be empty.");
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
    $pm = new ProductManager();
    $rows = $pm->listProducts();
    $html = "";
    if($rows != null) {

        foreach($rows as $row) {
            $id = $row['id'];
            $sku = $row['SKU'];
            $item_price = $row['item_price'];
            $description = $row['description'];
            $path = $row['path'];
            $qty = $row['Quantity'];


            $html .= "<tr>
				<td class='id'><span>$id</span></td>
				<td class='sku'><span>$sku</span></td>
				<td class='item_price'><span>$item_price</span></td>
				<td class='description'><span>$description</span></td>
				<td class='path'><span>$path</span></td>
                <td class='qty'><span>$qty</span></td> 
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
