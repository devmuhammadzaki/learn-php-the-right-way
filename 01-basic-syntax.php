<?php

// PHP basic syntax example
// PHP code is executed on the server and the result is returned to the browser
// PHP files can contain HTML, CSS, and JavaScript code
// PHP code starts with <?php

// echo and print are used to output data
echo "Hello, World!";
print "hello, world!";

echo ("Hello, World!");

echo 'Hello', 'world';
// you cant do the ubove with print
print("hello, world!");

// print can be used within expressions while echo cannot
// print has a return value of 1 echo has no return value
// echo is marginally faster than print

// escaping characters
echo "Joe's car";
echo 'joe\'s car';

// variables
// variables are used to store data
// variable names must start with a letter or underscore, followed by letters, numbers, or underscores
$greeting = "Hello, World!";
$number = 42;
$pi = 3.14;

// you cannot start variable names with a number or use special characters
$var1 = "Hello";
$var_2 = "World";
$var3 = "!";
echo $var1 . " " . $var_2 . $var3; // concatenation with dot operator

// you cannot assign values to $this or $self
// $this and $self are reserved keywords in PHP

// assigning variables by value vs by reference
$a = 10; // value assignment
$b = $a; // $b is now 10, a copy of $a
$a = 20; // $a is now 20, but $b remains 10
$c = &$a; // $c is a reference to $a
$c = 30; // $a is now 30, and $c is also 30
echo "a: $a, b: $b, c: $c"; // outputs: a: 30, b: 10, c: 30
?>

<!-- empedded PHP in HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- shorthand echo -->
    <h1><?= "Hello from PHP!" ?></h1>

    <!-- using PHP to output HTML -->
    <?php
    $var_5 = "This is a variable";
    echo "<p>$var_5</p>";
    ?>

</body>

</html>