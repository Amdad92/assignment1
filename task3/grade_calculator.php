<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Beautiful Form</title>
</head>
<body>
    <div class="card">
        <h1>Grade Calculator</h1>
        <form method="post" action="grade_calculator.php">
            <input type="number" id="test_score1" name="Enter_Marks_1" placeholder="Enter Marks-1" required>
            <input type="number" id="test_score2" name="Enter_Marks_2" placeholder="Enter Marks 2" required>
            <input type="number" id="test_score3" name="Enter_Marks_3" placeholder="Enter Marks 3" required>
            <button type="submit">Result</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $testScore1 = $_POST["Enter_Marks_1"];
            $testScore2 = $_POST["Enter_Marks_2"];
            $testScore3 = $_POST["Enter_Marks_3"];
            
            // Calculate the average.
            $average = ($testScore1 + $testScore2 + $testScore3) / 3;

            // Determine the letter grade.
            $grade = '';
            if ($average >= 80) {
                $grade = 'A+';
            } elseif ($average >= 70) {
                $grade = 'A';
            } elseif ($average >= 60) {
                $grade = 'A-';
            } elseif ($average >= 50) {
                $grade = 'B';
            } elseif ($average >= 40) {
                $grade = 'C';
            } elseif ($average >= 33) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
            // Display the result
            $myaverage=sprintf("Average score: %.2f",$average);
            echo"<p>$myaverage</p>";
            echo "<p>Letter Grade: $grade</p>";
        }
        ?>
    </div>
</body>
</html>
