from flask import Flask, request, redirect, render_template
import os
from dotenv import load_dotenv

app = Flask(__name__)
load_dotenv()

EXPECTED_USER_AGENT = os.getenv('User_Agent')
FLAG = os.getenv('FLAG')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    actual_user_agent = request.headers.get('User-Agent', '')
    if actual_user_agent == EXPECTED_USER_AGENT:
        return render_template('success.html', flag=FLAG)
    else:
        return redirect('/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
