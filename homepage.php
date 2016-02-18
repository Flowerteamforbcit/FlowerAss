<?php
session_start();
require 'db.php';
include 'head.php';
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
        <h2> Most frequent flowers</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="f1.php" class="thumbnail">
                    <img src="img/f1.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
                    <p>Expression of Love<br/>model#</p>
                    <strong>Price</strong>
                </a>
            </div>
            <div class="col-md-4">
                <a href="f1.php" class="thumbnail">
                    <img src="img/f2.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
                    <p>Expression of Love<br/>model#</p>
                    <strong>Price</strong>
                </a>
            </div><div class="col-md-4">
            <a href="f1.php" class="thumbnail">
                <img src="img/f3.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
                <p>Expression of Love<br/>model#</p>
                <strong>Price</strong>
            </a>
        </div><div class="col-md-4">
        <a href="f1.php" class="thumbnail">
            <img src="img/f4.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
            <p>Expression of Love<br/>model#</p>
            <strong>Price</strong>
        </a>
    </div>

    <?php 
    //var_dump($_SESSION)
    ?>

</div>

<?php 

include 'footer.php';
?>
