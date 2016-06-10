"""import random

tablero = []

for x in range(0,5):
  tablero.append(["O"] * 5)

def print_tablero(tablero):
  for fila in tablero:
    print " ".join(fila)

print_tablero(tablero)

def fila_aleatoria(tablero):
  return random.randint(0,len(tablero)-1)

def columna_aleatoria(tablero):
	return random.randint(0,len(tablero[0])-1)

barco_fila = fila_aleatoria(tablero)
barco_columna = columna_aleatoria(tablero)
adivina_fila = input("Introduce fila: ")
adivina_columna = input("Intoduce columna: ")

print barco_fila
print barco_columna

# escribi tu codigo a continuacion.
if (adivina_fila == barco_fila):
    print "Felicitaciones, Hundiste mi barco"
else:
    print "Agua, no tocaste mi barco"
    if  adivina_fila not in range(5) or adivina_columna not in range(5):
    	print "huy, eso ni siquiera esta en el oceano """

import random

tablero = []

for x in range(0,5):
  tablero.append(["O"] * 5)

def print_tablero(tablero):
  for fila in tablero:
    print " ".join(fila)

print "Juguemos as la batalla naval!"
print_tablero(tablero)

def fila_aleatoria(tablero):
  return random.randint(0,len(tablero)-1)

def columna_aleatoria(tablero):
  return random.randint(0,len(tablero[0])-1)

barco_fila = fila_aleatoria(tablero)
barco_columna = columna_aleatoria(tablero)
print barco_fila
print barco_columna

for turn in range(4):

	adivina_fila = input("Adivina fila: ")
	adivina_columna = input("Adivina columna: ")

	if adivina_fila == barco_fila and adivina_columna == barco_columna:
	  print "Felicitaciones! Hundiste mi barco!"
      break
	else:
	  if (adivina_fila < 0 or adivina_fila > 4) or (adivina_columna < 0 or adivina_columna > 4):
	    print "Huy, eso ni siquiera esta en el oceano."
	  elif(tablero[adivina_fila][adivina_columna] == "X"):
	    print "Ya dijiste esa."
	  else:
	  	print "No tocaste mi barco!"
	  	tablero[adivina_fila][adivina_columna] = "X"
	  print "Turno", turn + 1
	  if (turn == 3):
	  	print "Fin del juego"
	  print_tablero(tablero)
