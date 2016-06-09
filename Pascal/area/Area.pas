Program Ejercicio;
uses CRT;

var N,Ar : real;

Begin
        clrscr;
        delay (1000);
        writeln (' Calcule el area de un circulo ');
        Delay(1000);
        writeln (' ingrese el radio del circulo ');
        readln (N);
        Ar:=3.14*N*N;
        Delay(1000);
        writeln('la circunferencia del circulo es: ', Ar:0:3);
        Delay(2000);
        writeln('El redondeo de la circunferencia es: ', round (Ar));
        delay(2000);
        writeln ('El truncqueo de la circunferencia es: ', trunc(Ar));

        readkey;
End.