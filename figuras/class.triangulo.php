<?php
class triangulo extends figura implements formulas{
    private $base;
    private $altura;
    private $lado;     
    
    public function GetArea(){

    }

    public function GetPerimetro(){
        
    }

    public function GetTipo(){
        
    }

    public function area() {
        return ($this->base * $this->altura)/2;
    }

    public function perimetro() {
        return $this->lado + $this->lado + $this->lado;
      }
}
?>

