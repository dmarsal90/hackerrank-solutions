<?php

/*
 * Complete the 'designerPdfViewer' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY h
 *  2. STRING word
 */

function designerPdfViewer($h, $word)
{
    // Write your code here
    $l = strlen($word);
    $arr = array();
    for ($i = 0; $i < $l; $i++) {
        $pos_letter = ord(strtolower($word[$i])) - 96;
        array_push($arr, $h[$pos_letter - 1]);
    }
    return max($arr) * $l;
}
?>