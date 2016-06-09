# ################Funciones.py (delete) #####
#
# #################################################################
# #def newfuncion(nombre):
# #    print ("hola %s" % nombre)
# #newfuncion("Richard")
# #
# #
# #################################################################
# #lista = ["fizz", "fizz", "fizz", "fizz", "holiss", "holiss", "holiss"]
# #def fizzCount():
# #    count = 0
# #    for count in lista:
# #        if count == "fizz":
# #            count = count + 1
# #    print count
# #
# #fizzCount()
# #################################################################
#
#
# def Info(n):
#
#     precios = {"banano": 4, "manzana": 2, "naranja": 1.5, "pera": 3}
#     inventario = {"banano": 6, "manzana": 0, "naranja": 32, "pera": 15}
#     print ("aritculo: %s") % (n)
#     print ("precio: " + str(precios[n]))
#     print ("inventario: " + str(inventario[n]))
#
# Info("manzana")
#
# #############
#
# def facto(n):
#
#     fac_total = 1
#
#     while n > 1:
#         fac_total *= n
#         n -= 1
#     return fac_total
#
# num = int(raw_input('Introduce un numero: '))
#
# print facto(num)
#
# ######################################
#
# # def anti_vocal(texto):
# #     """
# #     funcion que elimina vocales de una cadena de caracteres
# #     >>> anti_vocal(texto) -> string
# #
# #     >>> anti_vocal("hola")
# #     >>> hl
# #     """
# #     cd = []
# #     for t in texto:
# #         if t in "aeiouAEIOU":
# #             continue
# #         cd.append(t)
# #     nc = "".join(cd)
# #     return nc
# #
# # print anti_vocal("richard")
#
# #########################################################
# #  programa que lea una cadena de caracteres y la agregre a una lista, cuando se
# # pida la lista dara el numero de cadenas que tenga dentro de ella o comando que
# # sirva para cuando se quiera cambiar la posicion de la cadena , el programa
# # pedira cadena de caracteres hasta que se le indique con otra cadena de carateres
# # que culmine la ejecucion
# #
# #
# # print ("..::Bienvenido::..")
# #
# #     def pedir_cadena(cadena):
# #         cadena = input("introduce una cadena")
# #         cadena_minuscula = cadena.lower()
# #         if (cadena_minuscula == 0):
# #             print ("No hay nada escrito")
# #
# # print ("fin de bucle")
#
# # def suma_de_digitos(n):
# #     resultado = 0
# #     for i in str(n):
# #         resultado += int(i)
# #     return resultado
#
# # def factorial(x):
# #     factorial = 1
# #
# #     if x < 0:
# #         print("Sorry, factorial does not exist for negative numbers")
# #     elif x == 0:
# #         print("The factorial of 0 is 1")
# #     else:
# #         for i in range(1,x + 1):
# #             factorial = factorial*i
# #
# #     return factorial
#
#
# # def es_primo(x):
# #     if x < 2:
# #         return False
# #     for n in range(2, x ):
# #         if x % n == 0:
# #             return False
# #     return True
# #
# # print es_primo(3)
#
# # def reverse(cadenas):
# #     cadenas_list = []
# #     cadenas_list.append(cadenas)
# #     for i in cadenas_list:
# #         for n in range(len(i)-1,-1,-1):
# #             pala = "".join(i[n])
# #         return pala
#     # cadena = cadenas
#     # for i in cadena:
#     #     return i
#
# # def reverse (texto):
# #     palabra=[]
# #     for i in range(len(texto),0,-1):
# #         palabra.append(texto[i-1])
# #         new="".join(palabra)
# #     return new
# #     return palabra
# #
# # print (reverse("richard"))
#
# # cadena = raw_input("Ingresa una cadena de letras: ")
# #
# # def puntaje_scrabble(palabra):
# #
# #     score = {"a": 1, "c": 3, "b": 3, "e": 1, "d": 2, "g": 2,
# #          "f": 4, "i": 1, "h": 4, "k": 8, "j": 8, "m": 3,
# #          "l": 1, "o": 1, "n": 1, "q": 5, "p": 3, "s": 1,
# #          "r": 1, "u": 1, "t": 1, "w": 8, "v": 4, "y": 4,
# #          "x": 8, "z": 10}
# #
# #     new_palabra = palabra.lower()
# #     puntuacion = 0
# #     for pa in new_palabra:
# #         puntuacion += score[pa]
# #     return puntuacion
#
# # def censor(texto, palabra):
# #
# #     new_texto = texto.split()
# #     nc = []
# #     for t in new_texto:
# #         if palabra in t:
# #             nc.append("*" * len(palabra))
# #             continue
# #         nc.append(t)
# #     jo = " ".join(nc)
# #     return jo
# #
# # print censor("mundo hola mundo", "mundo")
#
# # def contar(secuencia, item):
# #     contador = 0
# #     for i in secuencia:
# #         if i == item:
# #             contador += 1
# #             continue
# #     return contador
# #
# # print contar(["Richard", "Esther","Richard"], "richard")
#
# # def purificar(lis):
# #     lisn = []
# #     for i in lis:
# #         if i % 2 == 0:
# #             lisn.append(i)
# #     return lisn
# #
# # print purificar([2,3,4,5,6,7,8,9,1,2,5])
#
# # def producto(lis):
# #     pr = 1
# #
# #     for i in lis:
# #         pr *= i
# #     return pr
# #
# # print producto([2,2,2,2])
#
# # def eliminar_repetidos(lis):
# #     nlis = []
# #     for i in lis:
# #         if i in nlis:
# #             continue
# #         else:
# #             nlis.append(i)
# #     return nlis
# #
# # print eliminar_repetidos([2,2,1,1,5,5,6,6,7,7,8,8,8,8,8])
#
# # def media(l):
# #     ln = sorted(l)
# #     tam = len(ln)
# #     print "nueva lista ordenada-> " + str(ln)
# #     print "tamano de lista: " + str(tam)
# #     if tam % 2 == 0:
# #         ubi = tam / 2 - 1
# #         print "posicion: " + str(ubi)
# #         print "numero de lista seleccionados: "  + str(ln[ubi : ubi + 2])
# #         r = ln[ubi] + ln[ubi + 1]
# #         print r
# #         es = (ln[ubi] + ln[ubi + 1]) / (2.0)
# #         return "la media es: " + (es)
# #     else:
# #         ubi = tam / 2
# #         print "posicion: " + str(ubi)
# #         print "numero de lista seleccionado: " + str(ln[ubi])
# #         est = ln[ubi]
# #         return "la media es: " + str(est)
# #
# # print media([7,3,1,4,5])
#
# # calificaciones = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50,5]
# #
# # def print_notas(n):
# #     for no in n:
# #         print no,
# #
# # def notas_sum(n):
# #     su = 0
# #     for no in n:
# #         su += no
# #     return su
# #
# # def promedio_notas(n):
# #     prome = notas_sum(n) / float(len(n))
# #     return prome
# #
# # def varianza_notas(n):
# #     promedio = promedio_notas(n)
# #     varianza = 0
# #     for p in n:
# #         varianza += (promedio - p) ** 2
# #     vari = varianza / len(n)
# #     return vari
# #
# # def calificaciones_std_desviacion(v):
# #     return v ** 0.5
# #
# # v = varianza_notas(calificaciones)
# #
# #
# # print ("notas -> ") + str(print_notas(calificaciones))
# # print ("suma de notas -> ") + str(notas_sum(calificaciones))
# # print ("promedio de notas-> ")+ str( promedio_notas(calificaciones) )
# # print ("varianza de notas -> ") + str(varianza_notas(calificaciones))
# # print ("Desviacion de calificaions-> ")+ str( calificaciones_std_desviacion(v))
#
# ################################################
#
# # mi_dict = { "Nombre": "Richard",
# #                         "Edad": 19,
# #                         "Estudiantes": True
# #                     }
# # print mi_dict.keys()
# # print mi_dict.values()
# #
# # for i in mi_dict.keys():
# #     print i, mi_dict[i]
#
# # n = [i**2 for i in range(1, 12) if (i**2) % 2 == 0]
# # print n
# #
# # cubos_por_cuatro = [n**3 for n in range(1,11) if (n**3) % 4 == 0]
# #
# # print cubos_por_cuatro
#
#
# # li = [n for n in range(1,101)]
# # print li
# # print li[4:98:2]
#
# # mi_lista = range(1,11)
# #
# # hacia_atras = mi_lista
# #
# # print hacia_atras[::-1]
#
#
# # cuadrados = [ n ** 2 for n in range(1,11)]
# #
# # print filter(lambda l: l >= 30 and l <= 70, cuadrados )
#
# # treses_y_cincos = [n for n in range(1,16) if n % 3 == 0 or n % 5 == 0]
# #
# # print treses_y_cincos
#
# # '''
# # def contar_bit4(n):
# #     num = bin(n)
# #     '''
# # class Richard(object):
# #     """docstring for Richard"""
# #
# #     def __init__(self, Nombre, Apellido, Edad,):
# #         self.Nombre = nombre
# #         self.Apellido =apellido
# #         self.Edad = edad
# #
# #     def Edad(self, ):
# #         pass
#
#
# # class Empleado(object):
# # 	"""Representa empleados reales"""
# # 	def __init__(self, nombre_empleado):
# # 		self.nombre_empleado = nombre_empleado
# #
# # 	def calcular_sueldo(self, horas):
# # 		self.horas = horas
# # 		return horas * 60.00
# #
# # class EmpleadoMedioTiempo(Empleado):
# #     def calcular_sueldo(self, horas):
# #         self.horas = horas
# #         return horas * 50.00
#
#
#
#
#
#
#
# from datetime import datetime
#
# h = datetime.now()
# mes = h.month
# dia = h.day
# anio = h.year
# hora = h.hour
# minuto = h.minute
# seg = h.second
# print " %s/%s/%s" %(dia,mes,anio)
# print " %s:%s:%s " %(hora,minuto,seg )
