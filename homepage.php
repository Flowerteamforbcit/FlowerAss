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
            <a href="login.php">
                <img src="img/widesample.png" alt="sample">
            </a>
        </div>
        <div class="item">
            <a href="signup.php">
                <img src="img/widesample1.png" alt="sample2" >
            </a>
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


<div class="container">
    <hr>
    <h2> Flowers</h2>
    <div class="row">
        <div class="col-md-4">
            <a href="f1.php" class="thumbnail">
                <img src="img/f1.jpg" alt="Rose" style="width:150px;height:150px">
                <p><?php getDescription(0)?><br/>model# <?php getSKU(0)?></p>
                <strong>Price $<?php getPrice(0); ?></strong>
            </a>
        </div>
        <div class="col-md-4">
            <a href="iris.php" class="thumbnail">
                <img src="img/iris.png" alt="Pulpit Rock" style="width:150px;height:150px">
                <p><?php getDescription(1)?><br/>model# <?php getSKU(1)?></p>
                <strong>Price $<?php getPrice(1); ?></strong>
            </a>
        </div><div class="col-md-4">
        <a href="f1.php" class="thumbnail">
            <img src="img/lily.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
            <p><?php getDescription(2)?><br/>model# <?php getSKU(2)?></p>
            <strong>Price $<?php getPrice(2); ?></strong>
        </a>
    </div><div class="col-md-4">
    <a href="f1.php" class="thumbnail">
        <img src="img/sunflower.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
        <p><?php getDescription(3)?><br/>model# <?php getSKU(3)?></p>
        <strong>Price $<?php getPrice(3); ?></strong>
    </a>
</div>

<?php 
    //var_dump($_SESSION)
?>

</div>

<?php 

include 'footer.php';
?>
