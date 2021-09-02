<?php

require_once 'ArticlesSport.php';

class EmployeeMontagna extends ArticlesSport {

    public $vetrina ;

    public function setVetrina($_vetrina){
        $this->vetrina = $_vetrina;
        if($_vetrina = 0){
            $this->vetrina = "top in vetrina";
        } elseif ($_vetrina = 1){
            $this->vetrina = "bottom in vetrina";
        } 
    }

    public function getVetrina(){
        return $this->vetrina;
    }

}