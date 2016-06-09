#include <stdio.h>

int n,a,i,v;
main ( )
{

    printf("¿hay monitores LCD? ");
    scanf("%d",&n);

    while (n==1)
    {
        printf ("\n\nvendame uno\n\n");

        for (i=1;i<=n;i++)
        {
            printf("\n\nvendidos: %d\n\n",a);
            a=a+1;
        }

        printf("\n¿le quedan monitores LCD? \n\n");
        scanf ("%d",&n);


    }

    printf("\nExistencia agotada\n\n");
}
