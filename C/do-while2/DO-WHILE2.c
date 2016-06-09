//El programa debe decirme si hay o no Discos Duros (HDD)
//1 quiere decir que hay disponible
//2 quiere devir que no hay disponibles


#include <stdio.h>

//  Variables de tipo entero
/*
n   -> numero para identificar,
na -> numero 1
a   ->
aa ->
i    -> incremento,
cap-> capital recaudado
*/

int n,na,a,aa,i,cap;
main(){
	printf("\n\nhay HDD?\n\n");
	scanf ("%d",&n);

	switch(n){
		case 1:
			do{
				printf("\n\nvendame un HDD");
				a=a+1;
				for( i=1; i<=n ; i++){
					printf("\n\nvendidos: %d\n\n",aa);
					aa=aa+1;
					printf("\n\ncapital recaudado: %d",cap);
					cap=aa*10;
				}
			} while(a<=10); //<=== Mientras sea menor o igual a 5 para el inventario
		case 2:
				printf("existencia agotada");
		break;
		}
}
