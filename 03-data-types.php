<?php

/* Data Types & Types Casting */

# 4 Scalar Types
// Scalar types are the most basic data types in PHP, representing single values.

// 1. String
// a string is a sequence of characters enclosed in single or double quotes
// both single and double quotes can be used to define strings in PHP

$greeting = "Hello, World!";
echo $greeting;
echo '<br>';

// 2. Integer
// An integer is a whole number without a decimal point
// It can be positive or negative and can be represented in decimal, hexadecimal, or octal

$number = 42; // Decimal representation of 42
echo $number;
echo '<br>';
$hexNumber = 0x2A; // Hexadecimal representation of 42
echo $hexNumber; // Outputs: 42
echo '<br>';
// Octal representation of 42
$octalNumber = 052; // Octal representation of 42
echo $octalNumber; // Outputs: 42
echo '<br>';
// Integer can also be negative
$negativeNumber = -42;
echo $negativeNumber; // Outputs: -42
echo '<br>';

// 3. Float (or double)
// A float is a number that has a decimal point or is in scientific notation
// Floats can represent both whole numbers and fractions

$pi = 3.14;
echo $pi;
echo '<br>';
$scientificFloat = 2.5e3; // 2.5 * 10^3 = 2500
echo $scientificFloat; // Outputs: 2500
echo '<br>';
// Float can also be negative
$negativeFloat = -3.14;
echo $negativeFloat; // Outputs: -3.14
echo '<br>';


// 4. Boolean
// A boolean represents a truth value, either true or false

$isTrue = true;
echo $isTrue ? 'True' : 'False'; // Outputs: True
echo '<br>';

# 2 Compound Types
// Compound types are data types that can hold multiple values or more complex structures.

// 1. Array
// An array is a collection of values, which can be of any type
// Arrays can be indexed (numerical) or associative (key-value pairs)

// Indexed array
$fruits = ["apple", "banana", "cherry"];
echo "First fruit: " . $fruits[0]; // Outputs: apple
echo '<br>';

// Associative array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
echo "Name: " . $person["name"] . ", Age: " . $person["age"]; // Outputs: Name: John, Age: 30
echo '<br>';

// 2. Object
// An object is an instance of a class, which can contain properties and methods
// Objects are used to represent real-world entities and encapsulate data and behavior

class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}
$myCar = new Car("Toyota", "Corolla");
echo "Car brand: " . $myCar->brand . ", Model: " . $myCar->model; // Outputs: Car brand: Toyota, Model: Corolla
echo '<br>';


# 6 Special Types
// Special types are unique data types in PHP that serve specific purposes.

// 1. Callable
// A callable is a type that can be called as a function or method
// It can be a function name, an array with an object and method name, or a closure (anonymous function)

// Example of a callable function
function sayHello()
{
    return "Hello!";
}
$callableFunction = 'sayHello';
echo $callableFunction(); // Outputs: Hello!
echo '<br>';

// Example of a callable method
class Greeter
{
    public function greet()
    {
        return "Hello from Greeter!";
    }
}
$greeter = new Greeter();
$callableMethod = [$greeter, 'greet']; // Using an array with an object and method name
echo $callableMethod(); // Outputs: Hello from Greeter!
echo '<br>';

// Example of a closure
$closure = function ($name) {
    return "Hello, " . $name . "!";
};
echo $closure("Alice"); // Outputs: Hello, Alice!
echo '<br>';

// 2. Iterable
// An iterable is a type that can be looped over using a foreach loop
// It can be an array or an object that implements the Traversable interface

// Example of an iterable array
$iterableArray = [1, 2, 3];
foreach ($iterableArray as $value) {
    echo $value . " "; // Outputs: 1 2 3 
}
echo '<br>';

// Example of an iterable object
class IterableObject implements IteratorAggregate
{
    private $items = [1, 2, 3];

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
$iterableObject = new IterableObject();
foreach ($iterableObject as $value) {
    echo $value . " "; // Outputs: 1 2 3 
}
echo '<br>';

// 3. Resource
// A resource is a special variable that holds a reference to an external resource, such as a database connection or file handle
// Resources are created and managed by PHP extensions and are not directly manipulated by the programmer

// Example of a resource (file handle)
$resource = fopen("example.txt", "w");
if ($resource) {
    fwrite($resource, "Hello, Resource!");
    fclose($resource);
    echo "Resource written successfully.";
} else {
    echo "Failed to open resource.";
}
echo '<br>';

// 4. Mixed
// The mixed type can hold a value of any type, including scalar, compound, or special types
// It is used when a function can accept multiple types of arguments or return different types
function processValue($value): mixed
{
    if (is_string($value)) {
        return "String: " . $value;
    } elseif (is_int($value)) {
        return "Integer: " . $value;
    } elseif (is_array($value)) {
        return "Array with " . count($value) . " elements.";
    }
    return null;
}
$value1 = "Hello";
$value2 = 42;
$value3 = [1, 2, 3];
echo processValue($value1); // Outputs: String: Hello
echo '<br>';
echo processValue($value2); // Outputs: Integer: 42
echo '<br>';
echo processValue($value3); // Outputs: Array with 3 elements.
echo '<br>';

// 5. Void
// The void type indicates that a function does not return any value
function doNothing(): void
{
    // This function intentionally does not return anything
}
doNothing(); // Calling the function, but it returns nothing
echo "Function executed without returning a value.";
echo '<br>';

// 6. Null
// The null type represents a variable with no value or an uninitialized variable
$nullValue = null;
echo is_null($nullValue) ? 'Value is null' : 'Value is not null'; // Outputs: Value is null
echo '<br>';
// Null can also be used to unset a variable
$unsetVariable = "I will be unset";
$unsetVariable = null; // Unsetting the variable
echo is_null($unsetVariable) ? 'Variable is unset' : 'Variable is set'; // Outputs: Variable is unset
echo '<br>';
// Null can also be used to check if a variable is not set
$notSetVariable;
if (isset($notSetVariable)) {
    echo "Variable is set.";
} else {
    echo "Variable is not set."; // Outputs: Variable is not set.
}
echo '<br>';
// Null can also be used to check if a variable is empty
$emptyVariable = "";
if (empty($emptyVariable)) {
    echo "Variable is empty."; // Outputs: Variable is empty.
} else {
    echo "Variable is not empty.";
}
echo '<br>';
