<?php
// A simple PHP file

// Display a welcome message
echo "Welcome to Abhijith's PHP file!";

// Define a simple function
function greet($name) {
  return "Hello, " . htmlspecialchars($name) . "!";
}

// Call the function and display the result
echo "<br>" . greet("Abhijith");

// Add a function to calculate the sum of two numbers
function calculateSum($a, $b) {
  return $a + $b;
}

// Display the sum of two numbers
echo "<br>Sum of 5 and 10 is: " . calculateSum(5, 10);

// Add a function to check if a number is even or odd
function isEven($number) {
  return $number % 2 === 0 ? "Even" : "Odd";
}

// Check and display if a number is even or odd
$number = 7;
echo "<br>The number $number is: " . isEven($number);

// Add a loop to display numbers from 1 to 5
echo "<br>Numbers from 1 to 5: ";
for ($i = 1; $i <= 5; $i++) {
  echo $i . " ";
}

// Add a simple array and display its elements
$fruits = ["Apple", "Banana", "Cherry"];
echo "<br>Fruits: ";
foreach ($fruits as $fruit) {
  echo $fruit . " ";
}
?>