<?php

// Constants

// Constants are defined using the define() function or the const keyword
define("SITE_NAME", "My Website");
const VERSION = "1.0.0";
echo "Welcome to " . SITE_NAME . " - Version: " . VERSION;
echo '<br>';

echo defined("SITE_NAME"); // Outputs: 1 (true) because SITE_NAME is defined
echo '<br>';
echo defined("VERSION"); // Outputs: 1 (true) because VERSION is defined
echo '<br>';
echo defined("UNDEFINED_CONSTANT"); // Outputs:  (false) because UNDEFINED_CONSTANT is not defined
echo '<br>';

const MAX_USERS = 100; // This is a constant defined using the const keyword
echo "Max users allowed: " . MAX_USERS;
echo '<br>';
echo defined('MAX_USERS'); // Outputs: 1 (true) because MAX_USERS is defined
echo '<br>';

// the difference between constants defined with define() and const

// Constants defined with define() can be defined anywhere in the code, even inside functions
// Constants defined with const must be defined at the top level of the script or inside a class

// Magic Constants

// Magic constants are predefined constants in PHP that change depending on where they are used
echo "Current line: " . __LINE__; // Outputs the current line number in the file
echo '<br>';
echo "Current file: " . __FILE__; // Outputs the full path and filename of the file
echo '<br>';

// Variable Variables

// Variable variables allow you to use the value of a variable as the name of another variable
$varName = "greeting";
$$varName = "Hello, Variable Variables!";
echo $$varName; // Outputs: Hello, Variable Variables!
echo '<br>';

// Variable variables can also be used with constants
$constName = "SITE_NAME";
echo "Site name using variable variable: " . constant($constName); // Outputs: My Website
echo '<br>';

// Variable variables can be useful in dynamic situations where variable names need to be constructed at runtime
// Example of variable variables in a loop
for ($i = 1; $i <= 3; $i++) {
    $varName = "item" . $i;
    $$varName = "Item " . $i;
}
echo "Item 1: " . $item1 . ", Item 2: " . $item2 . ", Item 3: " . $item3; // Outputs: Item 1: Item 1, Item 2: Item 2, Item 3: Item 3
echo '<br>';

// Variable variables can also be used with arrays
$arrayName = "myArray";
$$arrayName = ["apple", "banana", "cherry"];
echo "First element of myArray: " . $myArray[0]; // Outputs: apple
echo '<br>';
