from sense_hat import SenseHat

sense = SenseHat()
sense.clear()
humidity = sense.get_humidity()
humidity = round(humidity, 1)
sense.show_message(str(humidity))
print(humidity)
