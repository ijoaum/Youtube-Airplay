<?php

$fp = fsockopen('192.168.20.39', 7000);


$content = 'Content-Location: http://r2---sn-b8u-8pme.c.youtube.com/videoplayback?ipbits=8&itag=18&ms=au&mt=1369691724&upn=V3yZoS97DMc&source=youtube&cp=U0hVTldMU19GU0NONV9PRldDOm1tWlgzNm5nWkxa&ratebypass=yes&sver=3&mv=m&newshard=yes&fexp=912507%2C919360%2C915111%2C916625%2C924605%2C901208%2C929123%2C929915%2C929906%2C925714%2C929919%2C929119%2C931202%2C932802%2C928017%2C912518%2C911416%2C906906%2C904476%2C930807%2C919373%2C906836%2C933701%2C926403%2C912711%2C929606%2C910075&ip=177.41.234.103&key=yt1&expire=1369715219&id=107e684492935ae7&sparams=cp%2Cid%2Cip%2Cipbits%2Citag%2Cratebypass%2Csource%2Cupn%2Cexpire&signature=C3473D53683A9A5F1DD80014589F338A4DB0435E.0C0CA35DFC1262302592F434A94CEBFAC47373AE
Start-Position: 0
';

fwrite($fp, "PUT /play HTTP/1.1\r\n");
fwrite($fp, "Host: 192.168.20.39\r\n");
fwrite($fp, "Content-Length: ".strlen($content)."\r\n");
fwrite($fp, "\r\n");

fwrite($fp, $content);

sleep(100);
//header('Content-type: text/plain');
// while (!feof($fp)) {
//     echo fgets($fp, 1024);
// }

exit;

?>
<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,            "http://192.168.20.39:7000/play" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     "Content-Location: http://bit.ly/115UiOb
Start-Position: 0

" ); 
curl_setopt($ch, CURLOPT_HTTPHEADER,     array( 'User-Agent: MediaControl/1.0',
												'Connection: Keep-Alive',
												'Keep-Alive: 999999999',
												'Content-Type: ',
												'Accept: ',
												'Host: '
												)); 

$result=curl_exec ($ch);

?>
