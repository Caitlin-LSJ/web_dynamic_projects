from flask import *

app = Flask(__name__)

@app.route('/')
def hello():
    name = "<script></script>"
    return f"Hello, {escape(name)}!";

if __name__ == '__main__':
    app.run(debug=True)
