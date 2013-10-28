<?php

    $inFile = "dataset.txt";
    $outFile = "result.txt";

    $handle = fopen($inFile, 'r') or die ("Cannot open file '$inFile'");
    $dataset = trim(fread($handle,filesize($inFile)));
    fclose($handle);

    $datasetArray = str_split(strrev($dataset));

    foreach($datasetArray as &$item)
    {
        switch($item) {
            case "A":
                $item = 'T';
                break;
            case "C":
                $item = 'G';
                break;
            case "G":
                $item = 'C';
                break;
            case "T":
                $item = 'A';
                break;
        }
    }

    $handle = fopen($outFile, 'w') or die("Cannot open file '$outFile'");
    fwrite($handle, implode($datasetArray, ""));
    fclose($handle);