import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
pin = 14

GPIO.setwarnings(False)
GPIO.setup(pin, GPIO.OUT)
GPIO.output(pin, GPIO.HIGH)


def trigger():
    GPIO.output(pin, GPIO.HIGH)

try:
    trigger()
except KeyboardInterrupt:
    print ("Quit")
    GPIO.cleanup()
