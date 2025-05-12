<?php
    $numbers = array(90,10,50,5,54,21,78,89);
    echo "Array Elements: ";
    foreach($numbers as $number) {
        echo $number." ";
    }
    echo "<br>";
    sort($numbers);
    echo "Sorted Array Elements: ";
    foreach($numbers as $number) {
        echo $number." ";
    }
    echo "<br>";


$students = array("Aditya", "Rohit", "Virat","Hardik");

echo "Original Array: ";
foreach ($students as $student) {
    echo $student . " ";
}
echo "<br>";

$students[] = "Bumrah";
echo "After Adding 'Bumrah': ";
foreach ($students as $student) {
    echo $student . " ";
}
echo "<br>";

unset($students[1]); 
echo "After Removing 'Rohit': ";
foreach ($students as $student) {
    echo $student . " ";
}
echo "<br>";
echo "Total Students: " . count($students);
?>
