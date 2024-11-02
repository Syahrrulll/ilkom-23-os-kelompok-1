from flask import flask
from daemonize import daemonize

app = Flask('/')
def home():
    return "Hola"

def run()