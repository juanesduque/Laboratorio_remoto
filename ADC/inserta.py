import mysql.connector
import numpy as np
import sys
mydb = mysql.connector.connect(
  host="localhost",
  user="phpmyadmin",
  password="phpmyadmin",
  database="graficos"
)
iterador = 0
archivo = open("lecturaADC.txt", "r")
data = archivo.readlines()
arreglo = np.zeros(len(data))

for linea in data:

  arreglo[iterador] = float(linea)*0.439e-3
  iterador = iterador+1


mycursor = mydb.cursor()
sql = "INSERT INTO tabla (frecuencia, amplitud) VALUES (%s, %s);"
masimo = arreglo.max()
frecu = sys.argv[1]
#print(frecu)
val = (frecu, str(masimo))
mycursor.execute(sql, val)
mydb.commit()
mydb.close()


