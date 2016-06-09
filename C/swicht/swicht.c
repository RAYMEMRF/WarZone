#include <stdio.h>

main()
{
    int O;
    float T,P,C,M,R;
    printf("\n\t\t\t\tCalculo de hortalizas");

    printf("\n\n1.- TOMATE");
    printf("\n\n2.- CEBOLLA");
    printf("\n\n3.- PAPA");
    printf("\n\n4.- MAÍZ: ");

    scanf ("%d",&O);
    switch (O){
            case 1:
               printf("\n\nIngrese en KG la cosecha de TOMATES: ");
               scanf("%f",&T);
               R=8*T;
            break;

            case 2:
               printf("\n\nIngrese en KG la cosecha de CEBOLLAS: ");
               scanf("%f",&C);
               R=9*C;
            break;

            case 3:
               printf("\n\nIngrese en KG la cosecha de PAPAS: ");
               scanf("%f",&P);
               R=5*P;
            break;

            case 4:
               printf("\n\nIngrese en KG la cosecha de MAIZ: ");
               scanf("%f",&M);
               R=7*M;
            break;

            default
        }
    printf("\n\nEl precio de la cosecha es %0.2fBS\n\n\n",R);
}


