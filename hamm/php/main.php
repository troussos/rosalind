<?php

$inFile = "dataset.txt";
$outFile = "result.txt";

$handle = fopen($inFile, 'r') or die ("Cannot open file '$inFile'");
$firstLineArray = str_split(trim(fgets($handle)));
$secondLineArray = str_split(trim(fgets($handle)));
fclose($handle);

$differenceArray = array_diff_assoc($firstLineArray, $secondLineArray);

$handle = fopen($outFile, 'w') or die("Cannot open file '$outFile'");
fwrite($handle, count($differenceArray));
fclose($handle);