<?php

// Display a simple message
echo "Hello World<br>";

// Set a cookie
setcookie('test', 'test', time() + 3600, '/'); // Cookie expires in 1 hour
$_COOKIE['test'] = 'test';
//Test line for commit changes;
echo $_COOKIE['testing'];

// this is a testing comment.
// Check if the cookie is set and display its value
if (isset($_COOKIE['test'])) {
    echo "Cookie value: " . $_COOKIE['test'] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}

// Add a function to display the current date and time
function displayDateTime() {
    return date('Y-m-d H:i:s');
}

// Display the current date and time
echo "Current Date and Time: " . displayDateTime() . "<br>";

// Add a simple loop to display numbers from 1 to 3
echo "Numbers from 1 to 3: ";
for ($i = 1; $i <= 3; $i++) {
    echo $i . " ";
}

?>