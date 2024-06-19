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
    document.querySelector("#Vista_ext").innerHTML = " ext: " + texto;
    /*var x = document.querySelector("#iconotel");
    x.style.display = "inline";
  } else {
    document.querySelector("#Vista_ext").innerHTML = texto;
    var x = document.querySelector("#iconotel");
    x.style.display = "none";*/
  }
}
function V_dept(texto) {
  document.querySelector("#Vista_departamento").innerHTML = texto;
}
function V_mail(texto) {
  document.querySelector("#Vista_mail").innerHTML = texto;
}
/*function ejecutar(idelemento){
  var aux = document.createElement("div");
  aux.setAttribute("contentEditable", true);
  aux.innerHTML = document.getElementById(idelemento).innerHTML;
  aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
  document.body.appendChild(aux);
  aux.focus();
  document.execCommand("copy");
  document.body.removeChild(aux);
  document.getElementById('Copiar').innerText="¡Copiado!";
}*/

/*
function ejecutar(idelemento){
  var aux = document.createElement("div");
  var tabla = document.getElementById(idelemento).cloneNode(true);
  tabla.style.backgroundColor = "#fff"; // agregar un fondo blanco a la tabla
  aux.appendChild(tabla); // envolver la tabla en un div contenedor
  aux.setAttribute("contentEditable", true);
  aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
  document.body.appendChild(aux);
  aux.focus();
  document.execCommand("copy");
  document.body.removeChild(aux);
  document.getElementById('Copiar').innerText="¡Copiado!";
}
*/

function ejecutar(idelemento) {
  // Crear un contenedor temporal
  var aux = document.createElement("div");
  // Clonar el elemento con el id especificado
  var tabla = document.getElementById(idelemento).cloneNode(true);
  // Asegurarse de que los estilos se mantengan
  tabla.style.backgroundColor = "#fff"; // agregar un fondo blanco a la tabla
  aux.appendChild(tabla); // envolver la tabla en un div contenedor
  
  // Hacer que el contenedor sea editable y seleccionable
  aux.setAttribute("contentEditable", true);
  aux.style.position = "absolute";
  aux.style.left = "-9999px";
  document.body.appendChild(aux);
  
  // Seleccionar y copiar el contenido
  var range = document.createRange();
  range.selectNodeContents(aux);
  var sel = window.getSelection();
  sel.removeAllRanges();
  sel.addRange(range);
  
  // Copiar al portapapeles
  document.execCommand("copy");
  
  // Eliminar el contenedor temporal
  document.body.removeChild(aux);
  
  // Cambiar el texto del botón (opcional)
  document.getElementById('Copiar').innerText = "¡Copiado!";
}
