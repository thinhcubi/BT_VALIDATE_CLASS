<?php

function nameClass($str){
    $pattern = '/^[C,A,P]+[0-9]{4,}[G,H,I,K,L,M]+$/';
    if(preg_match($pattern,$str)){
        echo "Ten $str hop le";
    } else {
        echo "Ten $str khong hop le";
    }
}

nameClass('C0318G');
echo "<br>";
nameClass('M0318G');
echo "<br>";
nameClass('A3421P');
echo "<br>";
nameClass('A321G');
