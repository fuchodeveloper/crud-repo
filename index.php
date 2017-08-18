<?php
/**
 * Simple PHP script to display a random number between 1 to 100 and the square root of that number
 */

$number = rand(1, 100);
$squareRoot = sqrt($number);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP script</title>
</head>
<body>

    <h3>A simple PHP script to display a random number between 1 to 100 and the square root of that number </h3>
    <p>Random number generated  - <?php echo $number; ?></p>
    <p>Square root of <?php echo $number; ?> is <?php echo $squareRoot; ?></p>

    <br>
    <p><em>NB: To generate random results, simple refresh the page.</em></p>
</body>
</html>
