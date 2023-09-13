<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- You can link a CSS file for styling if needed -->
    <title>Simple Calculator</title>
</head>
<body>
    <div class="card">
        <h1>Task 7: Simple Calculator</h1>
        <form method="post" action="simple_calculator.php">
            <input type="number" id="num1" name="num1" placeholder="Enter Number 1:" required>
            <br>
            <input type="number" id="num2" name="num2" placeholder="Enter Number 2:" required>
            <br>

            <label for="operation">Select Operation:</label>
            <select id="operation" name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <br>

            <button type="submit">Calculate</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
    
            // Perform the selected arithmetic operation
            $result = 0;
            if ($operation == "add") {
                $result = $num1 + $num2;
            } elseif ($operation == "subtract") {
                $result = $num1 - $num2;
            } elseif ($operation == "multiply") {
                $result = $num1 * $num2;
            } elseif ($operation == "divide") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
            } else {
                echo "<p>Error: Invalid operation.</p>";
            }
    
            echo "<p>Result: $result</p>";
        }
        ?>
    </div>
</body>
</html>
