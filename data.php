<?php

$agora = time();

$data = getdate($agora);

echo($data['weekday'].' '. $data['mday'] . '/' . $data['month'] . '/' . $data['year'].' '. $data['hours'].':'.$data['minutes'].':'.$data['seconds']."\n");

echo "\n";

var_dump($data);