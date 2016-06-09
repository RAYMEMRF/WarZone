Proceso CalcularPromedio
	Escribir ('Bienvinido Calcule su Promedio 5to Año');
	Escribir ('Geografía: ');
	Leer  G ;
	Escribir ('Deporte: ');
	Leer D ;
	Escribir ('Matematica: ');
	Leer M ;
	Escribir ('Algoritmo: ') ;
	Leer A;
	Escribir ('Practica de Oficina:');
	Leer P1;
	Escribir ('Mantenimiento: ');
	Leer M1;
	Escribir ('Informatica: ');
	Leer I
	Escribir ('Castellano: ');
	Leer C;
	Escribir (' Ingles: ');
	Leer I1
	Escribir ('Pre-Militar: ');
	Leer P;
	Escribir ('Sistema de Infomacion: ');
	Leer S
	Escribir ('Algebra: ');
	Leer A1;
	
	SR<-G + D + M + A + M1 + I + C + I1 + P + S + A1 + P1;
	PR= SR / 12
	Si PR >= 15 Entonces
		Escribir ('FELICIDADES.!!!');
	Sino
		Escribir ('ESTAS FRITOO XD');
	FinSi
	
	Escribir ('Su promedio actual es:'), PR;
	
	
	
FinProceso
