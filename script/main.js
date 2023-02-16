
function seleccionar(){
    var figura = document.getElementsByName("tipo")[0];
    var lado1 = document.getElementsByName("lado_1")[0];
    var lado2 = document.getElementsByName("lado_2")[0];
    var lado3 = document.getElementsByName("lado_3")[0];
    var figuraSeleccionada = figura.value;

  if (figuraSeleccionada === "sel") {
    lado1.disabled = true;
    lado2.disabled = true;
    lado3.disabled = true;
  } else if (figuraSeleccionada === "cuadrado") {
    lado1.disabled = false;
    lado1.value = "0";
    lado2.disabled = true;
    lado3.disabled = true;
  } else if (figuraSeleccionada === "rectangulo") {
    lado1.disabled = false;
    lado1.value = "0";
    lado2.disabled = false;
    lado2.value = "0";
    lado3.disabled = true;
  } else if (figuraSeleccionada === "triangulo") {
    lado1.disabled = false;
    lado1.value = "0";
    lado2.disabled = false;
    lado2.value = "0";
    lado3.disabled = false;
    lado3.value = "0";
  }
}
