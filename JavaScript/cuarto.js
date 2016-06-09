var letranun = "Richard";
var numlet = letranun.length;// muestra el numero de caracteres por la que está compuesta la cadena
var letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E','T'];
var nomb = ['Rich', 'ard'];
var num1 = 10;
var num2 = 0;
//---------------

var num = 1;
var contex = "Hola ";
var contex2 = contex + letranun;
var contex3 = contex.concat("Esther");
var contex4 = contex + num;

//---------------

var lowertext = letranun.toLowerCase(); //toLowerCase pasará todos los caracteres a minusculas.!

//------------

var positext = letranun.charAt(3); //charAt encontrara la posicion de un caracter cuando se le indique

//-------------

var encontext = letranun.indexOf('h'); //indexOf devolverá la posición del caracter en valor numerico entero, en caso de no encontrarla devolverá -1

//-------------

var encontextlast = letranun.lastIndexOf('r');//lastIndexOf devuelve el numero de la posición del caracter en un numero entero, 
											  //buscando a partir de la derecha, pero le dará su valor de posición empezando desde la izquierda
//--------------------------

var partcadena = letranun.substring(3,0);
//-----------------------

var rebantext = letranun.split("");

//Funciones para arrays-----

var numarrays = letras.length;

//------------------------

var concatarrays = letras.concat(['h','r','t']);

//------------------------

var unirarrays = nomb.join('');

//------------------------

var newarrays = letras.pop();

//-----------------------

var aniaarray = letras.push('y','u');

//---------------------

var shiftarray = letras.shift(); //shift eliminará el primer elemento de un array y lo devolvera el array se disminuye en 1, eliminamos 'T'

//--------------------

var unshiftarray = letras.unshift('RR', 'TT'); //unshift agrega un elemento o varios a la vez, agregamos 'RR' y 'TT'

//----------------------

var reverarray = nomb.reverse(); //reverse modifiva el array y lo coloca al inverso ejem: [123] -> [321];

//------ FUNCIONES PARA NUMEROS --------

if (isNaN(num1/'t')) {

	alert('no se aceptan 0');

	}

else {

	alert('esto =>' + num2/num1);

	}
//------------------

var infinito = 10/0;

if (infinito == Infinity){

	alert('YEA');

	}

else {

	alert('NO');	
	
	}
//----------------

var fixvar = 6005.333333333333

alert(fixvar,toFixed(2));
