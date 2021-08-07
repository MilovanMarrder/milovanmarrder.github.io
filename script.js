function V_nombre(texto) {
  document.querySelector("#Vista_nombre").innerHTML = texto;
}
function V_Puesto(texto) {
  document.querySelector("#Vista_puesto").innerHTML = texto;
}

//La siguiente funcion la definí para que cargué el texto y el icono por ser opcional-
function V_cel(texto) {
  if (texto != "") {
    document.querySelector("#Vista_cel").innerHTML = "+504 " + texto;
    var x = document.querySelector("#iconocel");
    x.style.display = "inline";
  } else {
    document.querySelector("#Vista_cel").innerHTML = texto;
    var x = document.querySelector("#iconocel");
    x.style.display = "none";
  }
}
function V_Ext(texto) {
  if (texto != "") {
    document.querySelector("#Vista_ext").innerHTML = "2236-0900 ext: " + texto;
    var x = document.querySelector("#iconotel");
    x.style.display = "inline";
  } else {
    document.querySelector("#Vista_ext").innerHTML = texto;
    var x = document.querySelector("#iconotel");
    x.style.display = "none";
  }
}
function V_dept(texto) {
  document.querySelector("#Vista_departamento").innerHTML = texto;
}
function V_mail(texto) {
  document.querySelector("#Vista_mail").innerHTML = texto;
}

// input cel
// display vista_cel
// mostrar si tiene algo escrito o en este caso un checked
/* function MostrarCel(texto) {


  if (x != null) {
    y.style.display = 'block';
  } else {
    y.style.display = 'none';
  }
} */
