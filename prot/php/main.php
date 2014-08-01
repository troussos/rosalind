<?php

$aFirstCodonTable = array(
    'A' => array(
        'A' => 'K',
        'C' => 'N',
        'G' => 'K',
        'U' => 'N'
    ),
    'C' => array(
        'A' => 'T',
        'C' => 'T',
        'G' => 'T',
        'U' => 'T'
    ),
    'G' => array(
        'A' => 'R',
        'C' => 'S',
        'G' => 'R',
        'U' => 'S'
    ),
    'U' => array(
        'A' => 'I',
        'C' => 'I',
        'G' => 'M',
        'U' => 'I'
    )
);

$cFirstCodonTable = array(
    'A' => array(
        'A' => 'Q',
        'C' => 'H',
        'G' => 'Q',
        'U' => 'H'
    ),
    'C' => array(
        'A' => 'P',
        'C' => 'P',
        'G' => 'P',
        'U' => 'P'
    ),
    'G' => array(
        'A' => 'R',
        'C' => 'R',
        'G' => 'R',
        'U' => 'R'
    ),
    'U' => array(
        'A' => 'L',
        'C' => 'L',
        'G' => 'L',
        'U' => 'L'
    )
);

$gFirstCodonTable = array(
    'A' => array(
        'A' => 'E',
        'C' => 'D',
        'G' => 'E',
        'U' => 'D'
    ),
    'C' => array(
        'A' => 'A',
        'C' => 'A',
        'G' => 'A',
        'U' => 'A'
    ),
    'G' => array(
        'A' => 'G',
        'C' => 'G',
        'G' => 'G',
        'U' => 'G'
    ),
    'U' => array(
        'A' => 'V',
        'C' => 'V',
        'G' => 'V',
        'U' => 'V'
    )
);

$uFirstCodonTable = array(
    'A' => array(
        'A' => '',
        'C' => 'Y',
        'G' => '',
        'U' => 'Y'
    ),
    'C' => array(
        'A' => 'S',
        'C' => 'S',
        'G' => 'S',
        'U' => 'S'
    ),
    'G' => array(
        'A' => '',
        'C' => 'C',
        'G' => 'W',
        'U' => 'C'
    ),
    'U' => array(
        'A' => 'L',
        'C' => 'F',
        'G' => 'L',
        'U' => 'F'
    )
);

$codonTable = array(
    'A' => $aFirstCodonTable,
    'C' => $cFirstCodonTable,
    'G' => $gFirstCodonTable,
    'U' => $uFirstCodonTable
);

$proteinString = '';

$inFile = "dataset.txt";
$outFile = "result.txt";

$handle = fopen($inFile, 'r') or die ("Cannot open file '$inFile'");
$rnaCodons = str_split(trim(fgets($handle)),3);
fclose($handle);

foreach($rnaCodons as $rnaCodon)
{
    $markers = str_split($rnaCodon);
    $proteinString .= $codonTable[$markers[0]][$markers[1]][$markers[2]];
}

$handle = fopen($outFile, 'w') or die("Cannot open file '$outFile'");
fwrite($handle, $proteinString);
fclose($handle);