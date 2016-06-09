program Suma_Resta ;
uses CRT;
var n1,n2,rs,rr,rm,rd: real;
begin
        clrscr;
        writeln('Hola, Suma y Resta tu operacion :D');
        Write('ingrese su primer numero: ');
        read (n1);
        write('ingrese su segundo numero: ');
        read (n2);

        rs:= n1+n2;
        rr:= n1-n2;
        rm:= n1*n2;
        rd:= n1 / n2;

        writeln('resultado de la suma: ',rs:0:2);
        writeln('resultado de la suma: ',trunc(rs));
        writeln('resultado de la resta: ',rr:0:2);
        writeln('resultado de la resta: ',trunc(rr));
        writeln('resultado de la multiplicaci¢n: ',rm:0:3);
        writeln('resultado de la multiplicaci¢n: ', trunc(rm));
        writeln('resultado de la divisi¢n: ',round(rd));
        writeln('resultado de la divisi¢n: ',trunc(rd));
        readkey;
end.
