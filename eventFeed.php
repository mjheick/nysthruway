<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.thruway.ny.gov/xml/netdata/events.xml");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);

/* Pretty-print XML */
$doc = new DomDocument('1.0');
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->loadXML($output);
$xml_string = $doc->saveXML();

echo htmlspecialchars($xml_string);
