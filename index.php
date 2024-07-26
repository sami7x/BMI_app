<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="submit.php" method="post">
            <h1>Body mass indicator</h1>
            <label for="weight">Enter your weight (kg):</label>
            <input type="number" id="weight" name="weight" required> <br> <br>

            <label for="height">Enter your height (m):</label>
            <input type="number" id="height" name="height" required>

            <button type="submit" value="Submit"> Submit</button>
        </form>

    </div>
</body>

</html>