<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Future Value Calculator</h1>
    <form method="post" action="">
        <label for="investment">Investment Amount:</label>
        <input type="number" id="investment" name="investment" value="<?php echo $_POST['investment'] ?: null  ?>" required><br><br>
        <!-- save data thêm vào (value) -->
        <label for="interest">Yearly Interest Rate:</label>
        <input type="number" id="interest" name="interest" step="0.01" value="<?php echo $_POST['interest'] ?: null  ?>" required><br><br>

        <label for="years">Number of Years:</label>
        <input type="number" id="years" name="years" value="<?php echo $_POST['years'] ?: null  ?>" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $investment = $_POST["investment"];
        $interest = $_POST["interest"];
        $years = $_POST["years"];

        $futureValue = $investment;

        for ($i = 1; $i <= $years; $i++) {
            $futureValue += $futureValue * ($interest / 100);
        }

        echo "<h2>Result:</h2>";
        echo "Investment Amount: $" . number_format($investment, 2) . "<br>";
        echo "Yearly Interest Rate: " . $interest . "%<br>";
        echo "Number of Years: " . $years . "<br>";
        echo "Future Value: $" . number_format($futureValue, 2);
    }
    ?>
</body>
</html>