<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Mass Index Calculator</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body>
    <div class="container">
        <!-- Server Side code here -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve Data
            $weight = $_POST["weight"];
            $height = $_POST["height"];

            function bmiCalculate($weight, $height)
            {
                return $weight / ($height * $height);
            }

            function bmiCategory($bmi)
            {
                if ($bmi < 18.5) {
                    return "underweight";
                } elseif ($bmi < 24.9) {
                    return "normal weight";
                } elseif ($bmi < 29.9) {
                    return "overweight";
                } else {
                    return "obese";
                }
            }

            $bmi = bmiCalculate($weight, $height);
            $category = bmiCategory($bmi);

            echo "<div class='result'> Your BMI according to your weight $weight (kg) and 
                  your height $height (m) is " . round($bmi, 2) . " kg/m<sup>2</sup>. <br> You are $category .</div>";
        } else {
        ?>
            <!-- Client side code here -->
            <h1>Body Mass Index Calculator</h1>

            <div class="form">
                <form action="" method="post">
                    <div class="weight_section">
                        <label for="weight">Enter your weight (kg):</label>
                        <input type="text" id="weight" name="weight" required>
                        <br>
                    </div>
                    <div class="height_section">
                        <label for="height">Enter your height (m):</label>
                        <input type="text" id="height" name="height" required>
                        <br>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>