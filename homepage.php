<?php
session_start();
require 'db.php';
include 'head.php';
require 'aboutProduct.php';
?>

<!-- caraousel -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="allProducts.php">
                <img src="img/sample1.jpg" alt="sample">
            </a>
        </div>
        <div class="item">
            <img src="img/sample2.jpg" alt="sample2">
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="jumbotron" id="content">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/shcart.js"></script>

    <h2>Best Sellers</h2>
    <div class="row">

        <div id="productslistforhome">
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->

            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
        </div>
    </div>
</div>

<?php

include 'footer.php';
?>
