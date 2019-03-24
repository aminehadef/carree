<?php

function haut_et_bas(int $x){
    $i = 0;
    while ($i < $x) {
        if ($i == 0) {
            echo '*';
        }elseif($i == $x - 1){
            echo "*\n";
        }
        else{
            echo '-';
        }
        $i++;
    }
}
function millieu(int $x){
    $i = 0;
    while ($i < $x) {
        if ($i == 0) {
            echo '|';
        }elseif($i == $x - 1){
            echo "|\n";
        }
        else{
            echo ' ';
        }
        $i++;
    }
}
function principal(int $x, int $y){
    haut_et_bas($x);
    $i = 2;
    while ($i < $y) {
        millieu($x);
        $i++;
    }
    haut_et_bas($x);
}
principal(0,0);
