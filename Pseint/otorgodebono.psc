Proceso otorgar_bono
	Escribir ('BIENVENIDO, INGRESE SU SUELDO BASE')
	Leer BS
	Escribir ('SELECCIONE EL PORCENTAJE DE AUMENTO DE BONO')
	Escribir ('1-. 20%')
	Escribir ('2.- 40%')
	Escribir ('3.- 50%')
	Escribir ('4.- 60%')
	Escribir ('5.- 70%')
	Escribir ('6.- 80%')
	Escribir ('7.- 90%')
	Escribir ('8.- 100%')
	Leer SLC
	Segun SLC  Hacer
		1:
			RS<-BS*20/100
			Escribir ('BONO SE LE HA OTORGADO 20% DE BONO '),RS
		2:
			RS<-BS*40/100
			Escribir ('BONO SE LE HA OTORGADO 40% DE BONO '),RS
		3:
			RS<-BS*50/100
			Escribir ('BONO SE LE HA OTORGADO 50% DE BONO '),RS
		4:
			RS<-BS*60/100
			Escribir ('BONO SE LE HA OTORGADO 60% DE BONO '),RS
		5:
			RS<-BS*70/100
			Escribir ('BONO SE LE HA OTORGADO 70% DE BONO '),RS
		6:
			RS<-BS*80/100
			Escribir ('BONO SE LE HA OTORGADO 80% DE BONO '),RS
		7:
			RS<-BS*90/100
			Escribir ('BONO SE LE HA OTORGADO 90% DE BONO '),RS
		8:
			RS<-BS*100/100
			Escribir ('BONO SE LE HA OTORGADO 20% DE BONO '),RS
		De Otro Modo:
			Escribir ('FUERA DEL RANGO DE SELECCION DE BONO ')
	FinSegun
	
FinProceso

