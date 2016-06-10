"""variables"""
intereses = 0.03
ahorrado = 100
ahorro = 0
print ("BIenvenido al calculo de su interes en el Banco")
for year in range(1, 11):
    ahorro = ahorro + ahorrado * intereses
    ahorrado = ahorrado + ahorro
    print ("acumulado %s euros en %s years" % (ahorro, year))
    print ("acumulado total %s" % (ahorrado))