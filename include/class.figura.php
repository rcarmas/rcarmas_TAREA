<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<div class="container form-container">
			<form name="figuras" method="POST" action="">
			<table class="table table-bordered table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="2" class="text-center">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select class="form-control" name="tipo" onchange="seleccionar()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input class="form-control" type="text" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input class="form-control" type="text" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input class="form-control" type="text" name="lado_3"size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input class="btn btn-primary" type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>
			</div>
			<script src="./script/main.js"></script>';
			
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
