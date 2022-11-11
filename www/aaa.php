<!DOCTYPE html>
<html>
<?php
    #generate random rgb color
    function rndRGBColorCode()
    {
        return 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')'; #using the inbuilt random function
    }

    #driver
    $rndColor = rndRGBColorCode(); #function call
    $valPrint =  '<body><h1 align = "center">The color is: ' . $rndColor . '</h1></body>'; #value print
    $colorPage = sprintf('<style type="text/css"> body {background-color: %s} </style>', $rndColor); #bg color shade
    echo $valPrint . $colorPage; #printing result
?>
</html>
