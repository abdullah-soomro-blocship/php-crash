<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
  echo 'User has been registered! <br>';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User $username has been registered! <br>";
}

// Pass in an argument
registerUser2('Abdullah');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}
$num1 = 10;
$num2 = 5;
$sum = add($num1, $num2);
echo $num1 . '+' . $num2 .'=' .$sum . '<br>';

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
    $sub = $num1 - $num2;
  return "$num1 - $num2 = $sub <br>";
}

echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

/// Alternative Method (Arrow Function)
$addd = fn($num1, $num2) => $num1 + $num2;

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);