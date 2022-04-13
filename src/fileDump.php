<?php

declare(strict_types=1);

use Tracy\Dumper;

if (!function_exists('fdump')) {
    /**
     * @param $object
     * @param string $name
     * @return void
     */
    function fdump($object, string $name = "dump.txt"): void
    {
        $fileHandle = fopen($name, "a+b");
        fwrite($fileHandle, Dumper::toText($object));
        fclose($fileHandle);
    }
}
