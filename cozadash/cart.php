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

<?php

    if(!$_GET['do']){

    include 'include/view_cart.php';

    }

?>

</div>
</div>

</section>

</section>

<?php include 'tpls/footer.php';

    }else{
        
    header("location:login.php");
    exit();
    }
?>