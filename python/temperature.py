from sense_hat import SenseHat

sense = SenseHat()
sense.clear()
temperature = sense.get_temperature()
temperature = round(humidity, 1)
file = open("temperature.txt", "w")
file.write(temperature)
file.close()
