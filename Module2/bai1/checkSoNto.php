<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function checkSNT($number)
    {
        if ($number == 2) {
            return true;
        }
        for ($i = 2; $i < $number; $i++) {
            if ($$number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    ?>
</body>

</html>