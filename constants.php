<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php # Script 1.9 - constants.php

    // Set today's date as a constant:
    define('TODAY', 'December 20, 2024');

    // Print a message, using predefined constants and the TODAY constant:
    echo '<p>Today is ' . TODAY .
    '.<br>This server is running 
    version <b>' . PHP_VERSION . 
    '</b> of PHP on the <b>' . PHP_OS . 
    '</b> operating system.</p>';

    ?> 
</body>
</html>