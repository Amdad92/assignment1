<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Task 2: Temperature Converter</h2>
       <div class="form">
       <form method="post" action="temperature_converter.php">
            <input type="number" name="temperature" placeholder="Enter temperature value:" required><br>
            <select name="operation" id="select">
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select><br>
            <button type="submit">Convert</button>
        </form>
       </div>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "celsius_to_fahrenheit":
                        $result = ($temperature*9/5)+32;
                        $result=sprintf("Temperature in Farenheit is:%.2f",$result);
                        echo $result;
                        break;
                    case "fahrenheit_to_celsius":
                        $result = ($temperature-32)*5/9;
                        $result=sprintf("Temperature in Celsius is:%.2f",$result);
                        echo $result;
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>