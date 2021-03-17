from flask import *

app = Flask(__name__)

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
