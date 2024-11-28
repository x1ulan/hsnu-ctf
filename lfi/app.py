from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def root():
    return render_template('index.html')

@app.route('/read')
def read():
    arg = request.args.get('file')
    with open('files/'+arg) as f:
        return f.read()

app.run('0.0.0.0', port=80)
