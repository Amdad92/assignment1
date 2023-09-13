<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- You can link a CSS file for styling if needed -->
    <title>Comparison Tool</title>
</head>
<body>
    <div class="card">
        <h1>Number Comparison Tool</h1>
        <form method="post" action="comparison_tool.php">
            <input type="number" id="number1" name="num1" placeholder="Enter Number 1:" required>
            <br>
            <input type="number" id="number2" name="num2" placeholder="Enter Number 2:" required>
            <br>

            <button type="submit">Compare</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
    
            // Use the ternary operator to determine the larger number
            $result = ($num1 > $num2) ? $num1 : $num2;
    
            echo "<p>The larger number is: $result</p>";
        }
        ?>
    </div>
</body>
</html>
