<!-- media !>
<?php
$numbers = array(45, 34, 67, 21, 56);
$sum = 0;
foreach ($numbers as $value) {
    $sum += $value;
}
$average = $sum / count($numbers);
echo "A média é: $average";
