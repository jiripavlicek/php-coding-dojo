<?php
class ExchangeTwoVariablesValues {

    function exchangeValues($a, $b)
    {
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
        return [$a, $b];
    }

    function exchangeValuesOneLiner($a, $b)
    {
        $a = $a - ($b = ($a = $a + $b) - $b);
        return [$a, $b];
    }
}    
