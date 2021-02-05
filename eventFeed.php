<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.thruway.ny.gov/xml/netdata/events.xml");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);

echo htmlspecialchars($output);
