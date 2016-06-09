#include <stdio.h>

float n, n1,re;
int op;

int main(){
	printf ("\n\t\t\t\tCALCULADORA\n");
	printf("ingrese numero 1: ");
	scanf("%f", &n);
	printf("ingrese numero 2: ");
	scanf("%f", &n1);
	printf("Seleccione una operación \n\n1-Suma\n2-Resta\n3-Multiplicacion\n4-Division\n\n");
	scanf("%d", &op);
	switch(op){
		case (1):
			re = n + n1;
			printf("Resultado de la suma: %0.2f\n\n", re);
		break;
		
		case (2):
			re = n - n1;
			printf("Resultado de la resta: %0.2f\n\n", re);
		break;
		
		case (3):
			re = n * n1;
			printf("Resultado de la multiplicacion: %0.2f\n\n", re);
		break;
		
		case (4):
			re = n / n1;
			printf("Resultado de la division: %0.2f\n\n", re);
		break;
	
		default:
			printf("fuera de rango\n\n");
		break;
	}
}
