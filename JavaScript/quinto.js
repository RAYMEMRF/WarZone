/*function suma (num1,num2) {
	
	result = num1 + num2;
	alert('el resultado es: ' + result);
};

suma(5,5)

//ejercicio 1

function numepar(num1) {
	
	if (num1 % 2 == 0) {

		alert("numero par");

	}
	else{

		alert('numero impar');

	}
}

numepar(1);

//--------------------------

var texto = 'HOLA';

function texto1(argutext) {
	if (argutext == argutext.toLowerCase()) {

		alert('esta en minusculas');
	}

	else if (argutext == argutext.toUpperCase()) {

		alert('esta en mayusculas');

	}

	else{

		alert('es mixta');
	}
}

texto1(texto);
*/
//-------------------

/*indextex = "La ruta nos aporto otro paso natural"

function pali(text){

	var text1 = text.toLowerCase();
	var text2 = text1.split("");

	if(text2 == text2.reverse()){

		alert('Es palindromo');
	}

	else{

		alert('No es palindromo');
	}

}

pali(indextex);*/


//------- continue && break


for(i=0; i<=100; i+=10){

	if (i == 50){

		continue;
	}

	else{

		alert(i);
	}

}