<?php
include_once './controller/homeController.php';
$nams = new getinfsHome();
$fnames = $nams->getNamesHome();
// $names = new getNamdes();
// $getN = $names->getNzme();
// print_r($fnames)


?>

<div class="main-content">
    <!-- home section -->
    <section class="home section hidden">
        <div class="container">
            <div class="intro">
                <img src="/portfolioo/views/images/DSC_4461 copie (2).jpg" alt="profile">
                <?php foreach ($fnames as $inHome); { ?>
                    <h1><?php echo $inHome["name"] ?></h1>
                <?php } ?>
                <p>Web Developer</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/f___zack/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section -->
    <!-- about section -->
</div>
