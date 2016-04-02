<?php

require_once('init.php');
loadScripts();

$data = array("status" => "not set!");

if (Utils::isGET()) {
    $pm = new ProductManager();
    $rows = $pm->listProducts();

    $html = "";
    if (!$rows || count($rows) == 0) {
        $html = "<tr><td>There are no results.</td></tr>";
    } else {

        foreach ($rows as $row) {
            $path = $row['path'];
            $sku = $row['SKU'];
            $price = $row['item_price'];
            $desc = $row['description'];


            $html .= "		<div class='col-md-4 thumbnailwrapper' >
			<a href='#' class='thumbnail'>
				 <img src=$path alt=$desc style='width:150px;height:150px'>
				 <br/>
				<p data-sku-desc='$sku'>$desc</p>
				<!--
				<p>model# $sku</p>
				-->
				<strong>$</strong><strong data-sku-price='$sku'>$price</strong>
			</a>			
			<input data-sku-add='$sku' type='button' value='Add to cart' class='btn btn-primary'/>
		</div>";


        }

    }

    echo $html;
    return;

} else {
    $data = array("status" => "error", "msg" => "Only GET allowed.");

}

echo json_encode($data, JSON_FORCE_OBJECT);


?>