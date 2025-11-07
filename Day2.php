<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables & Data Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #4CAF50;
        }
        .output {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .variable {
            color: #0078d7;
            font-weight: bold;
        }
        .result {
            color: #f44336;
            font-size: 20px;
            font-weight: bold;
        }
        .datatypes {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<h1>PHP Variables & Data Types</h1>

<?php
// Integer variable
$x = 10;
$y = 20;

// String variable
$name = "Laravel with AI";


// Boolean variable
$isActive = true;

// Float variable
$price = 99.99;

// Display variable types and values
echo "<div class='output'>";
echo "<p class='datatypes'>Integer x: <span class='variable'>$x</span> | Integer y: <span class='variable'>$y</span></p>";
echo "<p class='datatypes'>String name: <span class='variable'>$name</span></p>";
echo "<p class='datatypes'>Boolean isActive: <span class='variable'>" . ($isActive ? "True" : "False") . "</span></p>";
echo "<p class='datatypes'>Float price: <span class='variable'>$price</span></p>";
echo "</div>";

// Calculating and displaying result
echo "<div class='output result'>";
echo "Addition result of x + y: <span class='variable'>" . ($x + $y) . "</span>";
echo "</div>";
?>

<h2>Welcome to PHP, the power of dynamic <span class="variable">variables</span> and data types!</h2>

</body>
</html>
