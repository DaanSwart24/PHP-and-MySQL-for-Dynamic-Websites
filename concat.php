<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenation</title>
</head>
<body>
<?php # Script 1.7 - concat.php

// Create the variables
$first_name = 'Bret Easton';
$last_name = 'Ellis';
$author = $first_name . ' ' . $last_name;

$book = 'American Psycho';

// Print the values
echo "<p>The book <em>$book</em> was written by $author.";

?>
</body>
</html>