<?php

require_once 'ArticlesSport.php';
require_once 'Vetrina.php';

class EmployeeMontagna extends ArticlesSport {


    public $altaquota ;
    use Vetrina;

    public function setAltaquota($_altaquota){
        $this->altaquota = $_altaquota;
    }   

    public function getAltaquota(){
        return $this->altaquota;
    }

}