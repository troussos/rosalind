<?php

    $inFile = "dataset.txt";
    $outFile = "results.txt";

    $inputArray = parseRawString(file_get_contents($inFile));

    $currentEntry = '';
    $currentRatio = 0;

    foreach($inputArray as $setName => $data)
    {
        $entryCounts = array_count_values(str_split($data));
        $ratio = (($entryCounts['C'] + $entryCounts['G']) / strlen($data) * 100);
        if($ratio > $currentRatio)
        {
            $currentRatio = $ratio;
            $currentEntry = $setName;
        }
    }

    $answer =  "$currentEntry\n$currentRatio";

    file_put_contents($outFile, $answer);

    echo "$answer\n";


function parseRawString($rawString)
{
    $rawArray = explode('>', $rawString);
    unset($rawArray[0]);

    $parsedArray = array();

    foreach($rawArray as $entry)
    {
        $brokenEntry = explode("\n", $entry, 2);
        $parsedArray[$brokenEntry[0]] = str_replace("\n",'',$brokenEntry[1]);
    }

    return $parsedArray;
}