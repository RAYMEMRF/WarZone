Program Mul_div;

Uses CRT;

var n1,n2,rs,rs1:integer;

Begin
        clrscr;
        writeln('Multiplicacion y Division de dos numeros');
        write('ingrese un numero: ');
        read (n1);
        write('ingrese el siguiente numero: ');
        read (n2);
        rs := n1 * n2;
        rs1 := n1 div n2;
        writeln('El resultado de la multiplicacion es: ',rs);
        writeln('Y el resultado de la division es: ',rs1);
        readkey;
End.
