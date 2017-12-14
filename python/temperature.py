from sense_hat import SenseHat

sense = SenseHat()
sense.clear()
temperature = sense.get_temperature()
temperature = round(temperature, 1)
file = open("temperature.txt", "w")
file.write(str(temperature))
file.close()
