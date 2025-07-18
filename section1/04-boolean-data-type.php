<?php

/* Booleans */

$isCorrect = true; // A boolean variable can be true or false

// using ternary operator to check the value of the boolean variable
// If $isCorrect is true, it outputs 'Correct', otherwise it outputs 'Incorrect'
echo $isCorrect ? 'Correct' : 'Incorrect'; // Outputs: Correct
echo '<br>';

// Some constant values in PHP are considered false when evaluated in a boolean context:
// 0 -0 false
// 0.0 -0.0 false
// '' (empty string) false
// '0' (string with a single zero) false
// [] (empty array) false
// null false
