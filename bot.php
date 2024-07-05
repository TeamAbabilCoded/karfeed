<?php 
date_default_timezone_set('Asia/Jakarta');
require"token.php";
require"res.php";
$apiToken = "7205744478:AAEx2T1kKJlwgHgcTVyefeCEz9Gyoicknj0"; 
 while(true){
$no = rand(69,92);
$noo = rand(67,92);
$nama = getSurname();
$jam = date('H:i:s ');
$res = getGcast();
$odd = getGcastt();
$pesan = '
💳 '.$nama.'
🔥 M10
⌛ '.$jam.'
'
.$res.'

🚦 Tend: '.$odd.'
📈 Forecast: '.$no.'%
💸 Payout: '.$noo.'%
🔗 REGISTER HERE : bit.ly/OctaForexFX
📩 Q&A : @KevinMasterFX';
 

$data = [ 
 'chat_id' => '@GoldMasterTraderFX', 
 'text' => ''.$pesan
]; 
 
$response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); 
sleep(600);

$ms = 
'💱 You Order 💱
💳 '.$nama.'
🔥 M10
'.$res.'

🚦 Tend: '.$odd.'
📈 Forecast: '.$no.'%
💸 Payout: '.$noo.'%

Result : WIN ✅';


$datas = [ 
 'chat_id' => '@GoldMasterTraderFX', 
 'text' => ''.$ms
]; 
 
$response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($datas) ); 
sleep(5);

}
?> 