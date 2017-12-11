from sense_hat import SenseHat

sense = SenseHat()
sense.clear()
humidity = sense.get_humidity()
humidity = round(humidity, 1)
file = open("humidity.txt", "w")
file.write(str(humidity))
file.close()
