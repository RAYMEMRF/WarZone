#include <stdio.h>

int dad;

main ()

{

    printf ("ingresa tu edad, y te diremos si eres mayor de edad: ");

    scanf ("%d", &dad);

    if(dad>=18)
        {
            printf("Eres mayor de edad\n");
        }
   else
        {
           printf("eres menor de edad\n");
        }
}
