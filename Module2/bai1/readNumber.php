<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="0" max="999" value="<?php echo $_POST['number'] ?: null  ?>" required>
        <br>
        <input type="submit" value="Submit">
    </form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number = $_POST['number'];
    //lấy dữ liệu được gửi lên
    echo readNumber($number);
}
function readNumber($number)
{
    if ($number < 0 || $number > 999) {
        return 'out of ability';
    }

    $units = array(
        0 => '',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine'
    );

    $tens = array(
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety'
    );

    $teens = array(
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen'
    );

    if ($number < 10) {
        return $units[$number];
    } elseif ($number < 20) {
        return $teens[$number];
    } elseif ($number < 100) {
        $tensDigit = floor($number / 10);
        $onesDigit = $number % 10;
        $result = $tens[$tensDigit];
        if ($onesDigit > 0) {
            $result .= ' ' . $units[$onesDigit];
        }
        return $result;
    } else {
        $hundredsDigit = floor($number / 100);
        $tensDigit = floor(($number % 100) / 10);
        $onesDigit = $number % 10;
        $result = $units[$hundredsDigit] . ' hundred';
        if ($tensDigit > 0 || $onesDigit > 0) {
            $result .= ' and ' . readNumber($number % 100);
        }
        return $result;
    }
}

?>
</body>
</html>
