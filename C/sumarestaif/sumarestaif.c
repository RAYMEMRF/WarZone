#include <stdio.h>

int n1,n2,R,N;


main()

{
    printf("ingresa numero 1: ");

    scanf("%d", &n1);

    printf("ingresa numero 2: ");

    scanf("%d", &n2);

    printf("Presione 1 para sumar o 2 para restar: ");

    scanf ("%d", &N);


    if (N==1)
    {
       R=n1+n2;
       printf("El resultado de la suma es: %d",R);
    }
    if (N==2)
        {
            R=n1-n2;
            printf("El resultado de la resta es: %d", R);
        }

}
