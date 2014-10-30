<?php

include_once('DataStoreInterface.php');

class JsonDecoder implements DataStoreInterface
{
    public function getAll() {
        $string = file_get_contents(__DIR__ . '/../json/watches.json');
        /* do valid php json from string */
        $s_valid_json = str_replace('\'', '"', preg_replace("/(?<!\"|'|\w)([a-zA-Z0-9_]+?)(?!\"|'|\w)\s?:/", "\"$1\":", $string));
        $items = json_decode($s_valid_json);

        return $items;
    }
}