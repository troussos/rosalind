<?php

    $inputArray = parseRawString(file_get_contents("dataset.txt"));

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

    file_put_contents("results.txt", "$currentEntry\n$currentRatio");

function parseRawString($rawString)
{
    $rawArray = explode('>', $rawString);
    unset($rawArray[0]);

    foreach($rawArray as $entry)
    {
        $brokenEntry = explode("\n", $entry, 2);
        $parsedArray[$brokenEntry[0]] = str_replace("\n",'',$brokenEntry[1]);
    }
    return $parsedArray;
}