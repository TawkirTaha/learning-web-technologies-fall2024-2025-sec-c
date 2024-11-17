<?php
// Task 1: Calculate Area and Perimeter of a Rectangle
$length = 10; // Example length
$width = 5;  // Example width
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Task 1: Area = $area, Perimeter = $perimeter<br><br>";

// Task 2: Calculate VAT
$amount = 100; // Example amount
$vat = $amount * 0.15;
echo "Task 2: VAT = $vat<br><br>";

// Task 3: Check Odd or Even
$number = 7; // Example number
if ($number % 2 == 0) {
    echo "Task 3: $number is Even<br><br>";
} else {
    echo "Task 3: $number is Odd<br><br>";
}

// Task 4: Find Largest of Three Numbers
$a = 12; $b = 45; $c = 32; // Example numbers
if ($a > $b && $a > $c) {
    echo "Task 4: Largest is $a<br><br>";
} elseif ($b > $c) {
    echo "Task 4: Largest is $b<br><br>";
} else {
    echo "Task 4: Largest is $c<br><br>";
}

// Task 5: Print Odd Numbers Between 10 and 100
echo "Task 5: Odd numbers between 10 and 100:<br>";
for ($i = 11; $i < 100; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// Task 6: Search Element in an Array
$array = [10, 20, 30, 40, 50]; // Example array
$search = 30; // Element to search
$found = false;
foreach ($array as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}
echo "Task 6: Element $search " . ($found ? "Found" : "Not Found") . "<br><br>";

// Task 7: Print Shapes
echo "Task 7: Shapes:<br>";
// Shape 1
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

// Shape 2
$counter = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $counter++ . " ";
    }
    echo "<br>";
}
echo "<br>";

// Shape 3
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char++ . " ";
    }
    echo "<br>";
}
echo "<br>";

// Task 8: Print 2D Array Shapes
$array2D = [
    ['1', '2', '3', 'A'],
    ['1', '2', 'B', 'C'],
    ['1', 'D', 'E', 'F']
];
echo "Task 8: 2D Array Shapes:<br>";
foreach ($array2D as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
?>
