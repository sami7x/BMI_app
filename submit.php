<?php
function main()
{
    // echo "<h1>Body Mass Index</h1>";
    $weight = 55;
    $height = 1.52;
    // $weight = readline("Enter your weight(kg):");
    // $height = readline("Enter your height(m):");
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

main();
