<?php
$input = $_POST;
switch ($input['jenis_segitiga']) {
    
    case 'A':
        
        $arr      = array();
        $arrFinal = array();
        for ($i = 1; $i <= $input['panjang_sisi_segitiga']; $i++) {
            for ($a = 1; $a <= $i; $a++) {
                $arr[] = $input['karakter_segitiga'];
            }
            $arrFinal[$i] = implode("", $arr);
            unset($arr);
        }
        $finalResult = array(
            'status' => true,
            'content' => $arrFinal
        );
        break;
    
    case 'B':
        
        $arr      = array();
        $arrFinal = array();
        for ($i = 1; $i <= $input['panjang_sisi_segitiga']; $i++) {
            for ($a = $i; $a <= $input['panjang_sisi_segitiga']; $a++) {
                $arr[] = $input['karakter_segitiga'];
            }
            $arrFinal[$i] = implode("", $arr);
            unset($arr);
        }
        $finalResult = array(
            'status' => true,
            'content' => $arrFinal
        );
        break;
    
    case 'C':
        
        $arr      = array();
        $arrFinal = array();
        for ($i = 1; $i <= $input['panjang_sisi_segitiga']; $i++) {
            for ($a = $i; $a < $input['panjang_sisi_segitiga']; $a++) {
                $arr[] = '  ';
            }
            for ($a = 1; $a <= $i; $a++) {
                $arr[] = $input['karakter_segitiga'];
            }
            $arrFinal[$i] = implode("", $arr);
            unset($arr);
        }
        $finalResult = array(
            'status' => true,
            'content' => $arrFinal
        );
        break;
    
    case 'D':
        
        $arr      = array();
        $arrFinal = array();
        for ($i = 1; $i <= $input['panjang_sisi_segitiga']; $i++) {
            for ($a = 1; $a < $i; $a++) {
                $arr[] = '  ';
            }
            for ($a = $i; $a <= $input['panjang_sisi_segitiga']; $a++) {
                $arr[] = $input['karakter_segitiga'];
            }
            $arrFinal[$i] = implode("", $arr);
            unset($arr);
        }
        $finalResult = array(
            'status' => true,
            'content' => $arrFinal
        );
        break;
    
    default:
        $finalResult = array(
            'status' => false,
            'content' => 'Pilihan tidak tersedia'
        );
        break;
}
echo json_encode($finalResult);