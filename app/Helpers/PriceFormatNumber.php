<?php

function price_format($number,$decimal=0){
    return number_format($number, $decimal, ',', ' ');
}


