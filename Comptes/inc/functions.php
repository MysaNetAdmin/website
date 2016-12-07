<?php

function debug($variable)
{
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length)
{
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

function Age()
{
    $today = getdate();
    if ($today["mon"] >= 7)
    {
        if ($today["mday"] >= 18 && $today["mon"] == 7)
        {
            echo $today["year"] - 1996;
        }
        else if ($today["mday"] < 18 && $today["mon"] == 7)
        {
            echo $today["year"] - 1996 - 1;
        }
        else
        {
            echo $today["year"] - 1996;
        }
    }
    else
    {
        echo $today["year"] - 1996 -1;
    }
}