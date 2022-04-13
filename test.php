<?php

include __DIR__ . '/vendor/autoload.php';

$toDump = ['Hello, this is a test dump...'];

fdump($toDump, 'test.txt');
