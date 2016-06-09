#include <stdio.h>

int ed,n;
main(){
    printf ("\t\t\t\t\t\t\tBANCO\n\n");
    printf ("\t\t\t\tBIENVENIDO\n\n");
    printf ("ingrese su edad: ");
    scanf   ("%d",&ed);

    printf  ("\n\nSi es discapasitado, presione 1\n\n");
    printf  ("\n\nSino es discapasitado, presione 2\n\n");
    scanf   ("%d",&n);

    //verificacion

	if((n==1)||(ed>=60)){
    		printf("\n\ntPase por taquilla: X\n\n");
    	}
    	else{
		printf("\n\nPase por taquilla: Y\n\n");
    	}

}
