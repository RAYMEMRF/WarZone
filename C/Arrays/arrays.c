#include <stdio.h>

int main(){
	//arreglos unidimensionales o vectores
	int arreglo_prueba[5] = {1,2,0,4,4};
	printf("Hola mundo\n");
	printf( "El array de 0 es: %d\n",arreglo_prueba[0] );
	
	//arreglos bidimencionales o matriz
	int arregloM[ 3 ] [ 3 ] = { 12,14,15,16,17};
	
	printf("Bidimensional %d\n", arregloM[ 0 ] [ 2 ]);
}
