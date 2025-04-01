
<?php

/**
 * Function to check if two numbers are equal.
 * If equal, it prints the sum and triple of the sum.
 * If not equal, it prints "Not Matched".
 *
 * @param int $num1 First number
 * @param int $num2 Second number
 */

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Algorithm Input</title>
</head>
<body>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1"><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <br><br>
</body>
</html>

<?php
function algo1($num1, $num2)
{
    if ($num1 == $num2) {
        $sum = $num1 + $num2;
        $triple = $sum * 3;
        echo "<h3>Matched | Sum: $sum | Triple: $triple</h3><br>";
    } else {
        echo "<h3>Not Matched</h3><br>";
    }
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    // Validate if inputs are numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        algo1((int)$num1, (int)$num2);
    } else {
        echo "Invalid input. Please enter numeric values.<br>";
    }
}
?>