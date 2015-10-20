<?php
function cari_nilai($iniArray, $nilaiDiCari)
{
    for ($i=0; $i <= (count($iniArray) - 1); $i++) { 
        if ($iniArray[$i] == $nilaiDiCari) {
            return $i;
        }
    }
    return -1;
}
$arr = array(3, 1, 2, 5, 6, 7, 8, 7);
echo cari_nilai($arr, 3) .'<br/>';
echo cari_nilai($arr, 5) .'<br/>';
echo cari_nilai($arr, 7) .'<br/>';
echo cari_nilai($arr, 9) .'<br/>';
