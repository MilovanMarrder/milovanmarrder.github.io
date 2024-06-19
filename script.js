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
  aux.appendChild(tabla); // envolver la tabla en un div contenedor
  
  // Aplicar los estilos al contenedor temporal
  tabla.style.backgroundColor = "rgb(255, 255, 255)";
  tabla.style.borderCollapse = "collapse";
  tabla.style.boxShadow = "0 0 10px rgba(0, 0, 0, 0.2)";

  // Modificar los estilos de los elementos internos de la tabla clonada
  var logoImg = tabla.querySelector('.logofirma');
  if (logoImg) {
    logoImg.style.width = "80%";
    logoImg.style.height = "80%";
    logoImg.style.maxWidth = "300px";
    logoImg.style.maxHeight = "272px";
    logoImg.style.minWidth = "200px";
    logoImg.style.minHeight = "auto";
  }

  var pElement = tabla.querySelector('p');
  if (pElement) {
    pElement.style.fontSize = "10px";
    pElement.style.textAlign = "center";
    pElement.style.color = "#f78c00";
    pElement.style.fontWeight = "900";
  }

  var separatorCells = tabla.querySelectorAll('td[style*="background-image"]');
  separatorCells.forEach(function(cell) {
    cell.style.width = "1px";
    cell.style.backgroundImage = "linear-gradient(to bottom, rgba(247, 157, 0, 0.2), rgba(247, 157, 0, 1), rgba(247, 157, 0, 0.2))";
  });

  var textCells = tabla.querySelectorAll('.firma1texto td');
  textCells.forEach(function(cell) {
    if (cell.textContent.includes("Nombre del colaborador")) {
      cell.style.fontSize = "16px";
      cell.style.color = "#000";
      cell.style.fontWeight = "bold";
    } else if (cell.textContent.includes("Puesto de trabajo") || cell.textContent.includes("Departamento")) {
      cell.style.color = "#4c4b4c";
      cell.style.fontWeight = "bold";
      cell.style.fontSize = "11px";
    } else if (cell.style.height === "14px") {
      cell.style.color = "#333333";
    }
  });

  var emailLink = tabla.querySelector('a[href^="mailto"]');
  if (emailLink) {
    emailLink.style.color = "#333333";
    emailLink.style.textDecoration = "none";
    emailLink.style.display = "inline";
  }

  var emailIcon = tabla.querySelector('#IconoSobre');
  if (emailIcon) {
    emailIcon.style.width = "7%";
    emailIcon.style.height = "7%";
  }

  var telIcon = tabla.querySelector('#iconotel');
  if (telIcon) {
    telIcon.style.width = "7%";
    telIcon.style.height = "7%";
  }

  var locationIcon = tabla.querySelector('#IconoUbicacion');
  if (locationIcon) {
    locationIcon.style.width = "3%";
    locationIcon.style.height = "3%";
  }

  var wwwIcon = tabla.querySelector('#IconoWWW');
  if (wwwIcon) {
    wwwIcon.style.width = "3%";
    wwwIcon.style.height = "3%";
  }

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


