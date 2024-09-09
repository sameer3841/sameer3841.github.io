<?php
// File: counter.php

// Path to the file that stores the click count
$counterFile = 'counter.txt';

// Check if the file exists; if not, create it and set the initial count to 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Get the current count
$count = (int) file_get_contents($counterFile);

// If this is a POST request, increment the count
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count++;
    file_put_contents($counterFile, $count);
    echo $count;
    exit;
}

// For GET requests, just return the current count
echo $count;
?>
