#include <stdio.h>

int per,lech,a;
/*
 per = persona

 lech = cantidad de leche

 a = acumulador
*/

int main(){
	printf("¡bienvenido\t");
	scanf("%d", &lech);
	
	if (lech == 1){		
		do{
			printf("hay leche \n");			
			a = a + 1;			
		}while(a < 5);		
	};
	
	if (lech == 2){
		
		printf("Leche agotada \n");
		};
	
	if ((lech >= 3) || (lech < 0)){
		
		printf("Fail \t");
		
		};

	return 0;
}
