//Acceder a nodos desde sus etiqueta
// var parrafos = document.getElementsByTagName('p');
//
// for (var i = 0; i < parrafos.length; i++) {
//     var parrafo = parrafos[ i ];
//     console.log(parrafo);
// }
//
// console.log(parrafos.length);

//###########

//Acceder a nodos a partir de su atributo name
var att_name = document.getElementsByName('nombre');

//Acceder a nodos apartir de su id
var ids = document.getElementById('este_id');

//añadir texto a una pagina con js

var elemento_parrafo = document.createElement('p'); // <- crear el nodo

var contenido_parrafo = document.createTextNode("Texto agregado"); // <- crear el elemto texto para el nodo

elemento_parrafo.appendChild(contenido_parrafo); // <- unir el nodo elemento con el nodo tipo texto

document.body.appendChild(elemento_parrafo); // <- unir el nodo elemento con el cuerpo de la página

ids.parentNode.removeChild(ids);
