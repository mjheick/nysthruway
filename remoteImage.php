<?php

$i = urldecode($_GET["i"]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $i);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);

echo $output;
