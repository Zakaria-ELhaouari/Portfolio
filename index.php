<?php
    // include 'autoload.php';
    include 'views/include/navBar.php';
    include "controller/homeController.php";

    $home = new homeController();
    // $home->index('home')

    $pages = ['home' , 'about' ,  'service', 'portfolio' , 'contact'];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'] , $pages)){
            $page = $_GET['page'];
            $home->index($page);
        }else{
            include 'views/include/404.php';
        }
    }else{
        include 'views/home.php';
    }

?>