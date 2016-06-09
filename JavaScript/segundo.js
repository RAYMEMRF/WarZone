//If
var wat = false;
var lol = true;
var text1 = "hola";
var var1 = 19;

if (!wat && lol){

	alert("if madafaca");
}

//If-else

if (text1 == ""){

	alert("Vacio");
}
else{

	alert("Dice: ");
}

//If-else if

if (var1 == 18){

	alert("Tienes 18");
}

else if(var1 >= 25){

	alert("Eres mayor de 25");
}

else if(var1 >= 19){

	alert("eres mayor de 19");
}

/*----------------- Ejercicio -------------------*/

var letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E','T'];

var dni = 89955665;
var let = "C";

if (dni < 0 || dni > 99999999) {

	alert("DNI invalido");
}
else{

	var result = dni % 23;
	
	if (letras[result] == let){

		alert("DNI correcto");
	}

	else{

		alert("DNI incorrecto");
	}
}