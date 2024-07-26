<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Mass Index Calculator - Result</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Retrieve Data
            $weight = $_POST["weight"];
            $height = $_POST["height"];

            function main($weight, $height)
            {
                $bmi = bmiCalculate($weight, $height);
                $category = bmiCategory($bmi);
                echo "<div class='result'> Your BMI according to your weight $weight (kg) and 
                    your height $height (m) is " . round($bmi, 2) . " kg/m<sup>2</sup>. <br> You are $category .</div>";
            }

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

            main($weight, $height);
        }
        ?>
    </div>
</body>

</html>