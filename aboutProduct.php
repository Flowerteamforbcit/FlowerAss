<?php

require_once('init.php');
loadScripts();


function getPrice($index){
    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {


            $price = $rows[$index]['item_price'];
            $html = "$price";
        }
    }
    echo $html;
    return;
}
function getDescription($index){
    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {


            $description = $rows[$index]['description'];
            $html = "$description";
        }
    }
    echo $html;
    return;
}
function getSKU($index){
    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {


            $SKU = $rows[$index]['SKU'];
            $html = "$SKU";
        }
    }
    echo $html;
    return;
}


?>
