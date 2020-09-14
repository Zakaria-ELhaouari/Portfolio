<?php
include './models/aboutModels.php';
class getinfoPersonel{
    public function getinfo(){
        $infoPersonel = About::infoPersonel();
        return $infoPersonel;
    }
};

class getskillsPersonel{
    public function getskill(){
        $skillPersonel = About::skillsPersonel();
        return $skillPersonel;
    }
};

class geteducInfo{
    public function geteduc(){
        $educPersonel = About::educationPersonel();
        return $educPersonel;
    }
};

class getexpInfo{
    public function getexp(){
        $expPersonel = About::experiencePersonel();
        return $expPersonel;
    }
};



?>