<?php

trait Vetrina {
    public $vetrina_esp = "/ bottom in vetrina" ;

    public function setVetrina_esp($split){
        
        if ($split > 0) {
            $this->vetrina_esp = "/ top in vetrina";       
        } 
    }

    public function getVetrina_esp(){
        return $this->vetrina_esp;
    }
}
