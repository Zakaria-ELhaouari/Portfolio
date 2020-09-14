<?php
 include_once './models/homeModels.php';

 class homeController{
    public function index($page){
        include "./views/$page.php";
    }


 };

//  class getNames{
//     public function getName(){
//         $nameH = Home::infHome();
//         return $nameH;

//     }
//  }

class getinfsHome{
    public function getNamesHome(){
        $namefHome = inHome::getNameHome();
        return $namefHome;
    }
}


?>