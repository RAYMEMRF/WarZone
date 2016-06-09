Program Area_del_CIrculo;

Uses CRT;

var   N,Ar: real;

Begin
        clrscr;

        writeln(' Calcule el area de su Circulo');
        Write('ingrese el Diametro del ciruclo: ');
        readln(N);
        Ar:= 3.14 * N * N;
        Writeln ('El area su circulo es: ', Ar:0:5);

        readkey;
End.
