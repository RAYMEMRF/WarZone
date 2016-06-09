Program Identificacion;
uses CRT;
var edd: integer;
var CI: real;
var nom: String;

BEGIN
        clrscr;
        writeln ('Bienvenido Ciudadano');
        writeln('');
        write ('Ingrese su nombre: ') ;
        read (nom);
        writeln('');
        writeln ('Hola ' ,nom, ' ingresa tu C.I y tu edad');
        writeln('');
        write ('C.I: ');
        read (CI);
        writeln('');
        write ('Edad: ') ;
        read (edd);

        if edd >= 18 then
          begin
                writeln ('');
                writeln (nom, ' Due¤o de la C.I ', CI:8:0 , ' y con ', edd, ' a¤os de edad, cumple con la mayoria de edad');
          end

       ELSE
          begin
                writeln ('');
                writeln (nom, ' Due¤o de la C.I ', CI:8:0 , ' y con ', edd, ' a¤os de edad, no cumple con la mayoria de edad');
          end;

        readkey;
END.
