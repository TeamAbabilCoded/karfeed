<?php
function getSurname()
{
    $surnames = array(
 'AUDJPY-OTC', 
'EURJPY-OTC', 
'USDJPY-OTC', 
'EURUSD-OTC', 
'EURGBP-OTC', 
'NZDJPY-OTC', 
'EURCAD-OTC', 
'NZDCAD-OTC', 
'GBPAUD-OTC', 
'AUDUSD-OTC',
'USDCHF-OTC',
'CADJPY-OTC', 
'AUDCHF-OTC', 
'EURAUD-OTC', 
'USDCOP-OTC', 
'CHFJPY-OTC', 
'GBPNZD-OTC', 
'BRLUSD-OTC', 
'USDIDR-OTC', 
'USDARS-OTC', 
'USDPKR-OTC'
     );
     
$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];
return $random_surname;
}

 ?>
