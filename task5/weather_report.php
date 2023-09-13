<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather Report</title>
</head>
<body>
    <div class="card">
        <h1>Task 5: Weather Report</h1>
        <form method="post" action="weather_report.php">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" id="temperature" name="temperature" placeholder="Enter temperature in Celsius" required>
            <button type="submit">Check Weather</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
    
            // Determine the weather condition based on the temperature range.
            if ($temperature < 0) {
                echo "<p>It's freezing!</p>";
            } elseif ($temperature >= 0 && $temperature <= 20) {
                echo "<p>It's cool.</p>";
            } else {
                echo "<p>It's warm.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
