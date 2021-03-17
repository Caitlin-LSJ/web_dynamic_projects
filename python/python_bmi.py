from flask import *

app = Flask(__name__)
# To start with everything, you gotta make sure you've already install Python, at least 3.7 version
# Install it with Microsoft Store, just search up Python then you should be able to see Python 3.7
# I went with 3.7, but i think any higher version should work too.
# To check if you've successfully downloaded Python, click "Start" then type "PowerShell" and open
# type "Python --version", make sure it's 3.7 or higher, then type "pip --version", pip is important

# THEN, open VSCode and open the extensions tab/ Ctrl+Shift+X and install Python extension, the 29M downloads one
# Ctrl+Shift+P type, "Python: Select Interpreter" and pick the Python 3.* something, you'll be able to see it

#Up to this point, you can refer to this website if my instructions are not clear: 
#               https://docs.microsoft.com/en-us/windows/python/beginners 


# Next, make sure to type this into the VS terminal -  "pip install virtualenv" - for the virtual environment
# Note: to open terminal - View > Terminal
# Then make sure that virtualenv.exe is on PATH [Check your environment variables]
# "py -3 -m venv .venv" + ".venv\scripts\activate"  <<Type these two lines to activate the virtual environment, 
# but if you click on the green play button that says "Run python file in terminal" that could work too.
# Next install this:   "python -m pip install matplotlib" to install some more packages
# Lastly, most important and made me run in circles for two hours:  "pip install flask"
# DONE, CAN RUN PYTHON, I want to cry
# Then when you're done and all, type "deactivate" to close the virtual environment

# http://127.0.0.1:5000/bmi  << Opens/Runs the python as a html file
@app.route('/bmi')
def bmi_input_view():
    return render_template('bmi_input.html');

@app.route('/bmi_summary', methods=['POST'])
def bmi_summary_view():
    mass_kg = int(request.form['mass'])
    height_cm = int(request.form['height'])
    height_m = height_cm / 100;
    bmi = mass_kg / (height_m * height_m)
    # bmi_str = '{:.2f}'.format(bmi)
    bmi_str = f'{bmi:.2f}'
    # Reference: https://en.wikipedia.org/wiki/Body_mass_index (Singapore)
    # Reference: https://www.healthhub.sg/live-healthy/179/weight_putting_me_at_risk_of_health_problems
    if bmi < 18.5:
        interpretation = '(<18.5) Risk of developing problems such as nutritional deficiency and osteoporosis.'
    elif bmi <= 23.0:
        interpretation = '(18.5-23.0) Low Risk (healthy range).'
    elif bmi <= 27.5:
        interpretation = '(23.0-27.5) Moderate risk of developing heart disease, high blood pressure, stroke, diabetes.'
    else:  # > 27.5
        interpretation = '(>27.5) High risk of developing heart disease, high blood pressure, stroke, diabetes.'
    mass_healthy_lower_kg_str = f'{18.5*height_m*height_m:.1f}'
    mass_healthy_upper_kg_str = f'{23.0*height_m*height_m:.1f}'
    return render_template('bmi_summary.html',
        mass_kg=mass_kg, height_cm=height_cm, bmi_str=bmi_str,
        interpretation=interpretation,
        mass_healthy_lower_kg_str=mass_healthy_lower_kg_str,
        mass_healthy_upper_kg_str=mass_healthy_upper_kg_str);

if __name__ == '__main__':
    app.run(debug=True)
