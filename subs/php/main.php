<?php

$datasetHandler = fopen('dataset.txt','r');

$haystack = fgets($datasetHandler);
$needle = fgets($datasetHandler);
$offset = 0;
$maxlength = strlen($haystack);

do
{
    $offset+=1;
    $position[] = $offset;
    $offset = strpos($haystack, $needle, $offset);
}while(!empty($offset));

array_shift($position);

file_put_contents('result.txt',implode (' ', $position));