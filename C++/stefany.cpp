#include <stdio.h>
//#include <conio.h>
#include <string.h>

int main(){
	char nombre[ 15 ], apellido[ 15 ];
	
	int x=30,y=13, contV=0, contC=0,xaux,yaux,suma=0,i,j,e,contnombre=0,contapellido=0;
	
	xaux = x;
	
	yaux = y;

	printf("Ingrese el nombe: ");
	scanf("%s",nombre);
	printf("Ingrese el apellido: ");
	scanf("%s",apellido);

	contnombre = strlen(nombre);
	contapellido = strlen(apellido);
	suma = strlen(nombre) + strlen(apellido);
	
	//strlwr(nombre);
	//strlwr(apellido);
	
	//____________
	for( j=0; nombre[ j ] != '\0'; j++ ){
		if( 
			nombre[ j ] == 'b' || nombre[ j ] == 'c' || nombre[ j ] == 'd' || nombre[ j ] == 'f' || nombre[ j ] == 'g'
			|| nombre[ j ] == 'h' || nombre[ j ] == 'p' || nombre[ j ] =='w'
			|| nombre[ j ] == 'j' || nombre[ j ] == 'q' ||nombre[ j ]=='x'
			|| nombre[ j ] == 'k' || nombre[ j ] == 'r' || nombre[ j ] == 'y'
			|| nombre[ j ] == 'l' || nombre[ j ] == 's' || nombre[ j ] == 'z'
			|| nombre[ j ] == 'm'|| nombre[ j ] == 't' || nombre[ j ] == 'n'
			|| nombre[ j ] == 'v' ) {
			
			contC++;
			}
		else {
		  contV++;
		  }
		/* Pruebas_Block*/
		/* Pruebas_Block*/
	}
	//____________
	
	for(j=0; apellido[ j ] != '\0'; j++){
		
		if(apellido[j]=='a'||apellido[j]=='e'||apellido[j]=='i'||apellido[j]=='o'||apellido[j]=='u') {		
			contV++;
			}
			
		else{
		  contC++;
		}
	}
	//____________
	
	printf("\nVocales: %d \n",contV);
	printf("Consonantes: %d \n",contC);
	printf("Total: %d \n",suma);
	
	/* ------------------------------------------------- >
	//________________________________//
	for( i=0; nombre[ i ] != '\0'; i++ ){
		if( contnombre > 4 ){
			//gotoxy(x,y);
			printf("%c",nombre[i]);
			x=x+3;
			y=y-2;
			contnombre--;
		}
		else{
			// gotoxy(x,y);
			printf("%c",nombre[i]);
			x=x+3;
			y=y+2;
			//cont--;
		}
		if(contnombre==0){
			break;
			}
	}
	
	x = xaux;
	y = yaux + 1;
	
	//---------------------------------------------------//
	for( e=0; apellido[ e ] != '\0' ; e++ ){
		
		if( contapellido > 3){
			//gotoxy(x,y);
			printf("& %c",apellido[e]);
			x = x + 4;
			y = y + 2;
			contapellido--; }
		else{
			//gotoxy(x,y);
			printf(" t %c",apellido[e]);
			x = x + 5;
			y = y - 2;
			contapellido--;
			}
			
		if (contapellido == 0){
			break; 
			}
	}
	<--------------------------------------------------*/
	
	// gotoxy(xaux+8,yaux);
	 printf("\nV:%d \n",contV);
	
	// gotoxy(xaux+8,yaux+2);
	 printf("C:%d \n",contC);
	
	// gotoxy(xaux+8,yaux-2);
	 printf("T:%d \n",suma); 
	
	//getch();
	return 0;

}// fin del main
