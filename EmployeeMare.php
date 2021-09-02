<?php

require_once 'ArticlesSport.php';

class EmployeeMare extends ArticlesSport {
    
    public $vetrina=0 ;

    public function setVetrina($bol){
        
        if($bol = 0){
            $this->vetrina = "top in vetrina";
        } elseif ($bol = 1){
            $this->vetrina = "bottom in vetrina";
        }
    }

    public function getVetrina(){
        return $this->vetrina;
    }
}