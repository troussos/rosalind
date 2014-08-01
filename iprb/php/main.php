<?php

/**
 * Dom - Dom = Win
 * Dom - Hetro = Win
 * Dom - Rec = Win
 *
 * Hetro - Dom = Win
 * Hetro - Hetro = Need More Info
 * Hetro - Rec = Need More Info
 *
 * Rec - Dom = Win
 * Rec - Hetro = Need More Info
 * Rec - Rec = Fail
 *
 */

    $dominant = $argv[1];
    $hetro = $argv[2];
    $recessive = $argv[3];
    $population = array_sum($argv);

    //Probability that the first Allele is Dominant (Win condition)
    $dominantStat = $dominant / $population;

    $firstRecessiveStat = $recessive / $population;    

    $rd = $firstRecessiveStat * ($dominant / ($population-1));
    $rh = $firstRecessiveStat * ($hetro / ($population-1));
    $rr = $firstRecessiveStat * (($recessive-1) / ($population-1));

    $firstHetroStat = $hetro / $population;

    $hd = $firstHetroStat * ($dominant / ($population-1));
    $hh = $firstHetroStat * (($hetro-1) / ($population-1));
    $hr = $firstHetroStat * (($recessive) / ($population-1));

    $hasAllele = $dominantStat + $hd + $rd + (.75 * $hh) + (.5 * $hr) + (.5 * $rh);

    $noAllele = $rr + (.25 * $hh) + (.5 * $hr) + (.5 * $rh);

    echo "Has Dominant Allele $hasAllele\nDose Not Have Dominant Allele $noAllele\n";