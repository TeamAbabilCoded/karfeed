<?php
function getGcast()
{
    $gcasts = array(
   '🔼 call', 
   '🔽 put'

 );
    $random_gcast = $gcasts[mt_rand(0, sizeof($gcasts) - 1)];
    return $random_gcast;
}

function getGcastt()
{
    $gcastts = array(
   'buy', 
   'sell'

 );
    $random_gcastt = $gcastts[mt_rand(0, sizeof($gcastts) - 1)];
    return $random_gcastt;
}
?>