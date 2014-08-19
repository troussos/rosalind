<?php

$tableHandler = fopen('mass_table.csv', 'r');

while($row = fgetcsv($tableHandler))
{
    $table[$row[0]] = $row[1];
}
fclose($tableHandler);

$dataset = file_get_contents('dataset.txt');
$datasetArray = str_split($dataset);

$totalMass = 0;

foreach($datasetArray as $character)
{
    $totalMass += $table[$character];
}

file_put_contents('result.txt', $totalMass);