<?php

    session_start();

    if(isset($_SESSION['username'])){

            include 'functions/database_coza.php';
            
            include 'tpls/header.php';

            include 'tpls/navbar.php';
?>
<section id="main-container">

    <?php include 'tpls/sidebar.php'?>

<!--Page main section start-->
<section id="min-wrapper">
<div id="main-content">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <!--Top header start-->
        <h3 class="ls-top-header">Dashboard</h3>
        <!--Top header end -->

        <!--Top breadcrumb start -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li class="active">Dashboard</li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->
<div class="row">

    <div class="col-md-3">
        <div class="current-status-widget">
            <ul>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-light-green white">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="sale-view">2129</h5>
                        <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total sold</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-red white">
                            <i class="fa fa-download"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="download-show">5340</h5>
                        <p class="light-blue"><i class="fa fa-arrow-down light-blue"></i> Total download</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-lightBlue white">
                            <i class="fa fa-truck"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="deliver-show">10490</h5>
                        <p class="light-blue"><i class="fa fa-arrow-up light-blue"></i> Product delivered</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-light-green white">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="user-show">132129</h5>
                        <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total users</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-success white">
                            <i class="fa fa-github"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="product-up">29</h5>
                        <p class="text-success"><i class="fa fa-arrow-up text-success"></i> Uploaded project</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <div class="status-box">
                        <div class="status-box-icon label-light-green white">
                            <i class="fa fa-dollar"></i>
                        </div>
                    </div>
                    <div class="status-box-content">
                        <h5 id="income-show">10299 </h5>
                        <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total income</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>

    </div>
</div>


<!-- Main Content Element  End-->

</div>
</div>

</section>
<!--Page main section end -->


<?php include 'tpls/footer.php';

    }else{
        
        header("location:login.php");
        exit();
        }
?>