<?php

function vat($amount=200000)
{
    return $amount*15/100;
}

echo vat();


?>