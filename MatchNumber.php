<?php

/**
 * Function to check if two numbers are equal.
 * If equal, it prints the sum and triple of the sum.
 * If not equal, it prints "Not Matched".
 *
 * @param int $num1 First number
 * @param int $num2 Second number
 */
function algo1($num1, $num2)
{
    // Check if the two numbers are equal
    if ($num1 == $num2) {
        $sum = $num1 + $num2; // Calculate the sum of the two numbers
        $triple = $sum * 3;   // Calculate three times the sum
        // Display the results
        echo "<h3>Matched | Sum: $sum | Triple: $triple</h3><br>";
    } else {
        // Display "Not Matched" if the numbers are not equal
        echo "<h3>Not Matched</h3><br>";
    }
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1']; // Retrieve the first number from the form
    $num2 = $_POST['num2']; // Retrieve the second number from the form

    // Validate if inputs are numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        // Call the algo1 function with the numeric inputs
        algo1((int)$num1, (int)$num2);
    } else {
        // Display an error message for invalid inputs
        echo "Invalid input. Please enter numeric values.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Algorithm Input</title>
</head>
<body>
    <!-- HTML form for user input -->
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

