#include <stdio.h>

int edad;

main ()

{

    printf("ingresa tu edad: ");

    scanf ("%d", &edad);

    if(edad>=18)
        {
        printf ("eres mayor de edad\n");
        }
    /*else
        {
            printf("eres menor de edad ");
        }*/

    if(edad<=17)
        {
        printf ("\neres menor de edad\n");
        }



}
