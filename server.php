<?php

//json_decode traduce una stringa da formato json in una variabile PHP

$discs = json_decode(file_get_contents('discs.json'), true);

echo json_encode($discs);