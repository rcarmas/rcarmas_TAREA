<?php
class rectangulo extends figura implements formulas{
    private $base;
    private $altura;     
    
    public function GetArea(){

    }

    public function GetPerimetro(){
        
    }

    public function GetTipo(){
        
    }

    public function area() {
        return $this->base * $this->altura;
    }

    public function perimetro() {
        return 2 * ($this->base + $this->altura);
      }
}
?>
