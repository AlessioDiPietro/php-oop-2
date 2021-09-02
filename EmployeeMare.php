<?php

require_once 'ArticlesSport.php';
require_once 'Vetrina.php';


class EmployeeMare extends ArticlesSport {
    
    public $immersioni_profonde ;
    use Vetrina;

    public function setImmersioni_profonde($_immersioni_profonde){
        $this->immersioni_profonde = $_immersioni_profonde;
    }    

    public function getImmersioni_profonde(){
        return $this->immersioni_profonde;
    }
}