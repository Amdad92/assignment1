<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Even or Odd Checker</title>
</head>
<body>
    <div class="card">
        <h1>Task 4: Even or Odd Checker</h1>
        <form method="post" action="even_odd_checker.php">
            <input type="number" id="test_score1" name="Enter_number" placeholder="Enter an integer number" required> 
            <button type="submit">Result</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $checkNumber = $_POST["Enter_number"];
    
            //Check even or odd.

            if ($checkNumber % 2 == 0) {
                $checkEven=sprintf("Your input number %d is even number.\n", $checkNumber);
                echo "<p>$checkEven</p>";
            } else {
                $checkOdd=sprintf("Your input number %d is odd number.\n", $checkNumber);
                echo "<p>$checkOdd</p>";
            }
        }
        ?>
    </div>
</body>
</html>
