<?php
class cuadrado extends figura implements formulas {
    private $lado;     
    
    public function GetArea(){

    }

    public function GetPerimetro(){
        
    }

    public function GetTipo(){
        
    }

    public function area() {
        return $this->lado * $this->lado;
    }

    public function perimetro() {
        return 4 * $this->lado;
      }
	    
}
?>
