#include <stdio.h>
//#include <conio.h>
#include <string.h>

int main()
{
char nombre[10],apellido[10];
int x=30, y=13, contV=0, contC=0, xaux, yaux, suma=0, i, j, e, cont=0, cont1=0;
xaux=x;
yaux=y;

printf("Ingrese el nombre:\n");
scanf("%s",nombre);
printf("Ingrese el apellido:\n");
scanf("%s",apellido);

cont=strlen(nombre);
cont1=strlen(apellido);
suma=strlen(nombre)+strlen(apellido);
strlwr=(nombre);
strlwr=(apellido);
for(j=0;nombre[j]!='\0';j++)
{
 if(nombre[j]=='a'||nombre[j]=='e'||nombre[j]=='i'||nombre[j]=='o'||nombre[j]=='u')
	 {
		contV++;
	 }


  else
	  contC++;
}


for(j=0;apellido[j]!='\0';j++)
{
 if(apellido[j]=='a'||apellido[j]=='e'||apellido[j]=='i'||apellido[j]=='o'||apellido[j]=='u')
	 {
		contV++;
	 }
  else
	  contC++;
}
printf("////////////////////\n");
printf("Vocales: %d\n",contV);
printf("Consonantes: %d\n",contC);
printf("Total: %d\n",suma);

for(i=0;nombre[i]!='\0';i++)
 {
				if(cont>4)
				{
				 gotoxy(x,y);
				 printf("%c",nombre[i]);
				 x=x+3;
				 y=y-2;
				 cont--;
				}

				else
				  {

					 gotoxy(x,y);
					 printf("%c",nombre[i]);
					 x=x+3;
					 y=y+2;
					 cont--;
				  }
				if(cont==0)
				  break;

 }
  x=xaux;
  y=yaux+1;
 for( e=0;apellido[e]!='\0';e++)
 {
				if(cont1>3)
				{
				 gotoxy(x,y);
				 printf("%c",apellido[e]);
				 x=x+4;
				 y=y+2;
				 cont1--;
				}

				else
				  {

					 gotoxy(x,y);
					 printf("%c",apellido[e]);
					 x=x+5;
					 y=y-2;
					 cont1--;
				  }
				if(cont1==0)
				  break;

 }

 gotoxy(xaux+8,yaux-2);
 printf("T:%d",suma);
 gotoxy(xaux+8,yaux);
 printf("V:%d",contV);
 gotoxy(xaux+8,yaux+2);
 printf("C:%d",contC);



getch();
return 0;

}// fin del main
