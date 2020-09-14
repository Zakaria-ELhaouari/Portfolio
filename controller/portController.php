<?php

include_once './models/portModels.php';

class getPortf{
    public function portfolioInf(){
        $projects = infPortf::getinfPotf();
        return $projects;
    }
}

?>