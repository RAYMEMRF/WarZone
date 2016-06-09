Program Edad_programa;
uses crt;
var edad:integer;
var nombre:string;

Begin
        clrscr;
        textcolor(12);
        writeln('Bienvenido');
        delay(1000);
        write ('      Ingresa tu nombre: ');
        read (nombre);
        Delay(1000);
        write('      Ingresa tu edad ',nombre,': ');
        read (edad);
                if (edad>=18) then

                 begin
                  textcolor(5);
                  Delay(2000);
                  writeln('Eres mayor de edad ',nombre,'!!!');
                 end

                 Else

                 begin
                   delay(2000);
                   writeln ('eres menor de edad ',nombre,' :/');
                 end;
        readkey;
End.
