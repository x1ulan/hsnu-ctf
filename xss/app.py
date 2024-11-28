from flask import Flask, request,render_template_string, render_template

app = Flask(__name__)

@app.route('/')
def root():
    return render_template_string('''
        <p>what's your name?</p>
        <form action='/name'>
            <input type='text' name='name'>
            <input type='submit'>
        </form>
''')

@app.route('/name')
def name():
    name = request.args.get('name')
    return f'Hello, {name}!'
'''
@app.route('/report')
def report():
    return render_template('index.html')
'''
app.run('0.0.0.0', port=80)
