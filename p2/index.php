<?php

    $dob = new DateTime($_POST['dob']);
    $current = new DateTime($_POST['current']);

    // Calculate difference
    $diff = $current->diff($dob);

    // Calculate total days
    $days = $diff->format("%a");

    // Calculate years, months, and days separately
    $years = $diff->y;
    $months = $diff->m;
    $days_remaining = $diff->d;

    // Display the result
    echo "Age: $days days ($years years, $months months, $days_remaining days)";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h2>Calculate Age</h2>
    <form method="post" action='index.php'>
        <label for="dob">Date of Birth: </label>
        <input type="date" id="dob" name="dob"   >
        <br>
        <label for="current">Current Date:</label>
        <input type="date" id="current" name="current" >
        <br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
