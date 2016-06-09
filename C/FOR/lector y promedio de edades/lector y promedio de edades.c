#include <stdio.h>

int i,ed,a,pr;
main( )
{

    for(i=1;i<=15;i++)
    {
       printf("\n\nintrodusca su edad N: ");
       scanf("%d",&ed);
       a=a+ed;
    }

    pr=a/15;

    printf ("\n\n\nel promedio de edades es de las edades son: %d",pr);

    if (pr<13)
    {
        printf("\n\nla poblacion es de niños y niñas\n");
    }
    else
    {
        printf("\n\nla poblacion es de adolescentes\n");
    }
}
