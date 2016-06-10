//el primer alert
alert('Primer hola');

//Luego el segundo Alert
alert('Segundo hola');

/*
Prueba de
variables
y tipos de variables
*/

//var $var1 = 4 es correcto
//var _$var1 = 4 es correcto
//var 1var1 = 4 es incorrecto <-- Con numeros al inico es incorrecto
var var1 = 4;
var var2 = 3;
var resul = var2 + var1;
//resul = var2 + var1; <-- No usar la palabra reservada "var" antes de la variable, tambien es valido
var vartex = "hola :3"
// vartex = 'hola jejeje' <-- Con comillas simple tambien es valido

alert(resul);

// ARRAYS

var dias = ["lunes","martes","miercoles","viernes"];

var dia = dias[3]; // seleccionamos viernes

alert(dia);

// BOOLEANOS

var varbolet = true;
var varbolef = false;

//Incremento y Decremento

var varincre = 6;
var vardecre = 6;

	--vardecre;
	++varincre;

result2 = ++varincre - 2;
result3 = varincre++ - 2;

result4 = --vardecre + 2;
result5 = vardecre-- + 2;

//Operadores lógicos

alert(!varbolet);//Operadores
alert(!varbolef);//de negación

/*
en la negación todo lo distinto a 0 es false
 "" <--- true
 "hola" <-- false
*/

var resuland = varbolet && varbolef; //Operacion AND
var resulandt = varbolet && varbolet; //Operacion AND
/*
true and true -> true
true and false -> false
false and true -> false
false and false -> false
*/

alert(resuland);
alert(resulandt);

//-----------

var resulort = varbolet || varbolef;//Operador OR
var resulor = varbolef || varbolef;//Operador OR
/*
true or true -> true
false or true -> true
true or false -> true
false or false -> false
*/
alert(resulort);
alert(resulor);

//Operadores matemáticos

var ressum = var1 + var2;
var resres = var1 - var2;
var resmu = var1 * var2;
var resdi = var1 / var2;
var resmod = 21 % 7;

alert(ressum);
alert(resres);
alert(resmu);
alert(resdi);
alert(resmod);

//Operadores relacionales

var text1 = "letra";
var text2 = "Letra";

var result6 = var1 >= var2;
var result7 = var1 <= var2;
var result8 = var1 == var2;
var result9 = var1 != var2;
var result0 = var1 > var2;
var result01 = var1 > var2;
var resultext = text2 == text1;

alert(result6);
alert(result7);
alert(result8);
alert(result9);
alert(result0);
alert(result01);
alert(resultext);

//Las mayusculas son menores que las minusculas ejem: a > A
//el valor de los caracteres algabeticos va en incremento desde la a hasta la z, es decir z > a
//Las cadenas de caracteres de comparan desde el lado izquierdo, se comparan y se encuentran similitudes y/o diferencia


/*------------ EJERCICIO ------------------*/


var valores = [true, 5, false, "hola","adios", 2];

if (valores[3] > valores[4]) {



};
