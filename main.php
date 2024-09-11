<?php
// Get the current hour
$hour = date("H");

// Determine the greeting based on the time of day
if ($hour >= 5 && $hour < 12) {
    $greeting = "Good morning!";
} elseif ($hour >= 12 && $hour < 17) {
    $greeting = "Good afternoon!";
} elseif ($hour >= 17 && $hour < 21) {
    $greeting = "Good evening!";
} else {
    $greeting = "Good night!";
}

// Display the greeting
echo $greeting;
?>
