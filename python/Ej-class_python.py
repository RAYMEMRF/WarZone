class Fruta(object):
	'''Una clase que crea varias frutas sabrosas.'''
	def __init__(self, nombre, color, sabor, venenosa):
		self.nombre = Nombre
		self.color = color
		self.sabor = sabor
		self.venenosa = venenosa

	def descripcion(self):
		print "Soy un %s %s y soy %s." % (self.Nombre, self.color, self.sabor)

	def es_comestible(self):
		if not self.venenosa:
			print "Si! Soy comestible."
		else:
			print "No me comas! Soy super venenosa."

limon = Fruta("limon", "amarillo", "agrio", False)

limon.descripcion()
limon.es_comestible()

class Animal(object):
	"""Crea animales lindos."""

	esta_vivo = True
	def __init__(self, nombre, edad):
		self.nombre = nombre
		self.edad = edad

	def descripcion(self):
		print str(self.nombre) + " " + str(self.edad)

hipopotamo = Animal("Rolo", 12)

hipopotamo.descripcion()


#Herencia de Empleado a EmpleadoMedioTiempo
class Empleado(object):
	"""Representa empleados reales"""
	def __init__(self, nombre_empleado):
		self.nombre_empleado = nombre_empleado

	def calcular_sueldo(self, horas):
		self.horas = horas
		return horas * 60.00

class EmpleadoMedioTiempo(Empleado):
	def calcular_sueldo(self, horas):
		self.horas = horas
		return horas * 50.00

	def sueldo(self, horas):
		return super(EmpleadoMedioTiempo, self).calcular_sueldo(horas)

milton = EmpleadoMedioTiempo("Richard")
print milton.sueldo(10)

class Triangulo(object):
	numero_de_lados = 3
	def __init__(self, angulo1,angulo2,angulo3):
		self.angulo1 = angulo1
		self.angulo2 = angulo2
		self.angulo3 = angulo3

	def revisar_angulos(self):
		if self.angulo1 + self.angulo2 + self.angulo3 == 180:
			return True
		else:
			return False

mi_triangulo = Triangulo(90,30,60)

print (mi_triangulo.numero_de_lados)

print (mi_triangulo.revisar_angulos())

class Auto(object):
	condicion = "nuevo"
	def __init__(self, modelo, color, kpl):
		self.modelo = modelo
		self.color = color
		self.kpl = kpl
	def verAuto(self):
	    return "Este es un " + self.modelo + " " + self.color + "que alcanza " + str(self.kpl) + " kpl."

miAuto = Auto("Clio", "gris", 16)
print (miAuto.verAuto())
