<?php
    // Function to check if a string is a palindrome
    function isPalindrome($string) {
        // Remove spaces and convert to lowercase
        $cleanedString = strtolower(str_replace(' ', '', $string));
        // Reverse the string
        $reversedString = strrev($cleanedString);
        // Check if the original string is equal to the reversed string
        return $cleanedString === $reversedString;
    }

    // Example usage
    $exampleString = "A man a plan a canal Panama";
    if (isPalindrome($exampleString)) {
        echo "\"$exampleString\" is a palindrome.";
    } else {
        echo "\"$exampleString\" is not a palindrome.";
    }

    echo "\nHello Jhon Doe!!";
    echo "\nini message";
?>