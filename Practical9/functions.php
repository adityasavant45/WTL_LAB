<?php

function sayHello() {
    echo "Hey there! Glad you stopped by. <hr>";
}

sayHello();

function greetUser($username) {
    echo "Welcome back, $username!<br>";
}

greetUser("Aditya");
greetUser("Rohit");
greetUser("Neha");

echo "<hr>";

function showTemperature($city = "Pune") {
    echo "Current weather update from $city.<br>";
}

showTemperature("Mumbai");
showTemperature();
showTemperature("Delhi");

echo "<hr>";

function calculateBill($amount, $tax) {
    $total = $amount + ($amount * $tax / 100);
    return $total;
}

echo "Total bill with tax: ₹" . calculateBill(500, 18) . "<br>";
echo "Total bill with tax: ₹" . calculateBill(1200, 5) . "<br>";
echo "Total bill with tax: ₹" . calculateBill(999, 12) . "<hr>";

function favoriteQuote($quote = "Believe in yourself.") {
    echo "Quote of the day: \"$quote\"<br>";
}

favoriteQuote("Stay hungry, stay foolish.");
favoriteQuote();
favoriteQuote("The best way to predict the future is to create it.");

echo "<hr>";

?>
