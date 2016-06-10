print ("Bienvenido al traductor de espanol a Pig Latin.")
pyg = 'ei'

original = raw_input('Escribe una palabra: ')

if len(original) > 0 and original.isalpha():
    print (original)
    original.lower()
    palabra = original.lower()
    primera = palabra[0]
    if primera == "A" or primera == "a" or primera == "E" or primera == "e"\
     or primera == "I" or primera == "i" or primera == "O"\
      or primera == "o" or primera == "U" or primera == "u":
        print ("vocal")
    else:
        print ("consonante")
else:
    print ('Vacio')