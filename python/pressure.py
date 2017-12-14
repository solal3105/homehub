from sense_hat import SenseHat

sense = SenseHat()
sense.clear()
pressure = sense.get_pressure()
pressure = round(pressure, 1)
file = open("pressure.txt", "w")
file.write(str(pressure))
file.close()
