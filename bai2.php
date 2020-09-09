<?php
// get file from input.txt
$getFile = file_get_contents('input.txt');
// convert file string to array
$getArrNumber = explode("\n", $getFile);

$dupNumber = [];
// approve  2 loop
for ($i = 0; $i < count($getArrNumber); $i++) {
$number = $getArrNumber[$i];
$count = 0;
for ($j = 0; $j < count($getArrNumber); $j++) {
if ($getArrNumber[$j] == $number) $count++;

// if element duplicate >=3 then 
if ($count >= 3) {
    // when number not exists in array .then push
if (!in_array($number, $dupNumber)) {

array_push($dupNumber, $number);
}
break;
};
}
}
if (count($dupNumber) > 0) {
echo 'Duplicate number to file input: ' . implode(', ', $dupNumber)."\n";
} else {
echo 'No duplicate number to file input!';
}
?>