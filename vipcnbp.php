<?php
$urls = array(
    'http://xinghuovip.cn'
);
$api = 'http://data.zz.baidu.com/urls?site=xinghuovip.cn&token=ENU4HvCEsMEfAMT8';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;