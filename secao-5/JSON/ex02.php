<?php

$json = '[{"nome":"Igor","idade":30},{"nome":"Jordino","Idade":30}]';

$data = json_decode($json, true);

var_dump($data);