<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="numerator" placeholder="Nhap So ">
    <input type="number" name="denominator" placeholder="Nhap So">
    <button type="submit">Submit</button>
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerator = $_POST["numerator"];
    $denominator = $_POST["denominator"];

    function divide($numerator, $denominator)
    {
        if ($denominator == 0) {
            throw new Exception("Can't divide by zero");

        }
        return $numerator / $denominator;

    }
    try {
        $result = divide($numerator, $denominator);
        echo $result;
    } catch (Exception $q) {
        echo $q->getMessage();
    }
}
?>


