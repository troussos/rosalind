<?php

    $dataset = 'TCGTGAGTCACTGAAGAACAGGTTCACCTAAAATCAGATCGCGCCAGTGCCTGCGGCAGGGTGCAATCCTGGCCTGAGCCTCTAGCAGCACGTATATGACTCACACAACACGCTAACTTTCGGATAATCTAGCGCACGTTCGCAGCTGACGGGGAAGCCTCGATTGGCCCATCTCTCGCTGGGAATTCGCCGCCCTAACTCCCGAACCGAGAAGCCACGATGATGTAACAAATCTTAGTTTTCCTCAGCAGCAGGGCCCGGATGGTTCTTGAAGCTTGCAGGGTAGTGGGTCGCCACAACTTTTGAGGAGTGAGTTAACGCCTTACTTTTCACTCCGCGCGCTTCCACGATATCGTGGCCTTTTTAGCTGGATTCAAGTGTCGGGAAGAGTATCATATCGGCACGAAACTGACTCGACAAAATCCAATAATATCGCGAAGCAGGGATTGTTGACCGGCTTTCATTCCCCGAAGACCAGCTGTTCTAAGGAGCCAGGGCCCTCGAGGTAGATATTGCTTACAGTAAGTGGCAGCCTTAACAATAAGGTGGCATCGAAAGTCGTTCGAGCCTGGTCGAAGGGGAGTATCTTATCAGCTCATGCGATACCGATTGGATCGAGACCTCGGATCCATTGTTAGATCAATGCCACGCAGTCTAATGATCGAATCACGCTACTGCAGCACACGCGAGGTAACAAGTCGTAGTCGACGCCTCCCCAATCTAATCATTCCTTATGGGGTCCTACAAGGAAATTATTCACTACTAGGAGTAAGGTTGTCAGATTTCTGAGATTACCAATCGTACATTAATTGATGAGCAGAAGTACGACCCGGGGCCCGACTCAACACGACTACAAACACCAATCGCTATCTTGCCGGATTAGCGTTATAAGGCATCATGCTCAAACCATATGTGGTAGGAGGACGGGTTACGATTACTTC';

    $rna = str_replace('T', 'U', $dataset);

    echo $rna . "\n";
