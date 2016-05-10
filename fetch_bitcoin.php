<?php

$url="https://coinbase.com/api/v1/prices/spot_rate";

$out=file_get_contents($url);

echo $out;
