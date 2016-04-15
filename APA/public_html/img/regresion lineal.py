import numpy as np
import math

X = np.mat('[2104 3;1600 3;2400 3;1416 2;3000 4;1985 4;1534 3;1427 3;1380 3;1494 3;1940 4;2000 3;1890 3;4478 5;1268 3;2300 4;1320 2;1236 3;2609 4;3031 4;1767 3;1888 2;1604 3;1962 4;3890 3;1100 3;1458 3;2526 3;2200 3;2637 3;1839 2;1839 2;2040 4;3137 3;1811 4;1437 3;1239 3;2132,4]')
Y = np.mat('[399900; 329900; 369000; 232000; 539900; 299900;314900; 198999; 212000; 242500; 239999; 347000;329999; 699900; 259900; 449900; 299900; 199900;499998; 599000; 252900; 255000; 242900; 259900;573900; 249900; 464500; 469000; 475000; 299900;349900; 169900; 314900; 579900; 285900; 249900; 229900; 345000]')

XPseudoInv = (X.T*X).I*X.T

Vector_P = XPseudoInv*Y

h = []
y1 = []
err = 0

y1.append(549000)
x1 = np.mat('[4215;4]')
h.append(Vector_P.T*x1)
print ("Valor real: ") + str(y1[0])
print ("Valor obtenido: ") + str(h[0])

y1.append(287000)
x2 = np.mat('[2162;4]')
h.append(Vector_P.T*x2)
print ("Valor real: ") + str(y1[1])
print ("Valor obtenido: ") + str(h[1])


y1.append(368500)
x3 = np.mat('[1664;2]')
h.append(Vector_P.T*x3)
print ("Valor real: ") + str(y1[2])
print ("Valor obtenido: ") + str(h[2])


y1.append(329900)
x4 = np.mat('[2238;3]')
h.append(Vector_P.T*x4)
print ("Valor real: ") + str(y1[3])
print ("Valor obtenido: ") + str(h[3])


y1.append(314000)
x5 = np.mat('[2567;4]')
h.append(Vector_P.T*x5)
print ("Valor real: ") + str(y1[4])
print ("Valor obtenido: ") + str(h[4])


y1.append(299000)
x6 = np.mat('[1200;3]')
h.append(Vector_P.T*x6)
print ("Valor real: ") + str(y1[5])
print ("Valor obtenido: ") + str(h[5])


y1.append(179900)
x7 = np.mat('[852;2]')
h.append(Vector_P.T*x7)
print ("Valor real: ") + str(y1[6])
print ("Valor obtenido: ") + str(h[6])


y1.append(299900)
x8 = np.mat('[1852;4]')
h.append(Vector_P.T*x8)
print ("Valor real: ") + str(y1[7])
print ("Valor obtenido: ") + str(h[7])


y1.append(239500)
x9 = np.mat('[1203;3]')
h.append(Vector_P.T*x9)
print ("Valor real: ") + str(y1[8])
print ("Valor obtenido: ") + str(h[8])


for i in range(len(y1)):
    err += abs(y1[i] - h[i])

print ("Valor de la aptitud despues de las predicciones: ") + str(err)