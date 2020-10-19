<?php
function binarySearch(array $numbers, int $needle, int $low, int $high): bool {

    if ($high < $low) {
        return FALSE;
    }

    $mid = (int) (($low + $high) / 2);

    if ($numbers[$mid] > $needle) {
        return binarySearch($numbers, $needle, $low, $mid - 1);
    } else if ($numbers[$mid] < $needle) {
        return binarySearch($numbers, $needle, $mid + 1, $high);
    } else {
        return TRUE;
    }
}

$numbers = range(1, 200, 5);
echo "<pre>";
$number = 31;
if (binarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}

$number = 500;
if (binarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}