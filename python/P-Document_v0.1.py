# Programa que me permita ingresar cadenas de caracteres
# los almacene en un documento de texto plano, permita recorrer los string que
# contenga, poder cambiar la posicion en que se encuentrar, verificar cuantos
# strings son de tipo numericos o de tipo alfabetico al igual de que muestre
# # cuantas letras,numeros y simbolos hay. El programa debe culminar cuando el usuario
# teclee la palabra "salir", "exit" o "terminar"


"""
isalpha() == true if type(str)
"""
# entrar = True
listilla = ["richard", "esther", 124,"!"]

def verificar(a):
    pass
#################

def recorrer(b):
    """ Funcion que recorre una lista para identificar
    los tipos de datos que contiene
    """
# mi_dict = { "Nombre": "Richard",
#                         "Edad": 19,
#                         "Estudiantes": True
#                     }
# print mi_dict.keys() <- Imprime claves
# print mi_dict.values() <- imprime valores
#
# for i in mi_dict.keys():
#     print i,":" + mi_dict[i]
    cadena = 0
    enteros = 0
    flotante = 0

    cantidad ={ cadena: 0,
                        enteros: 0,
                        flotante: 0 }
    for i in b:
        if type(i) == int:
            enteros += 1
        elif type(i) == str:
            cadena += 1
        elif type(i) == float:
            flotante += 1
    print "cadenas " + str(cadena)
    print "enteros " + str(enteros)
    print "flotantes " + str(flotante)

#################
def cambiar(c,d):
    pass
#################
def documento():
    pass
#################

def agregar(e):
    pass
################


# mi_dict = { "Nombre": "Richard",
#                     "Edad": 19,
#                     "Estudiantes": True
#                 }
# print mi_dict.keys()
# print mi_dict.values()
#
# for i in mi_dict.keys():
# print i,":", mi_dict[i]

recorrer(listilla)
