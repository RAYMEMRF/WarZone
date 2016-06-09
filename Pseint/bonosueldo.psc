Proceso abonosueldo
	Escribir ("Ingrese su sueldo")
	leer sueldo
	si (sueldo >= 3000) entonces
		escribir (" no recibe bono ")
	Sino
		sueldoI <- sueldo * 0.20
		sueldoII <- sueldoI + sueldo
		escribir ("recibe un bono de 20%, su sueldo ahora es de: "), sueldoII
	FinSi	
FinProceso
