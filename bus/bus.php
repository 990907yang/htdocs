<?php
$ch = curl_init();
//$code=$_GET['code'];//정류장id
$url = 'http://swopenAPI.seoul.go.kr/api/subway'; /*URL*/
$KEY = "/6d7852724779616d313137664b526c55";
$TYPE = "/xml";
$SERVICE = "/firstLastTimetable";
$START_INDEX = "/1";
$END_INDEX = "/5";
$statnNm = "/서울";

$p = $KEY.$TYPE.$SERVICE.$START_INDEX.$END_INDEX.$statnNm;

curl_setopt($ch, CURLOPT_URL, urlencode($url.$p));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

?>