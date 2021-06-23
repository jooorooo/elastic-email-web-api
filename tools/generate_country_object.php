<?php

$file = __DIR__ . '/countries.txt';
$rows = file($file);

$a = [];
foreach($rows as $r) {
    if(preg_match('/Name = "(?<Name>[^"]*)", CountryID = (?<CountryID>\d+), Code = "(?<Code>[^"]*)", CallingCode = "(?<CallingCode>\d+)"/', $r, $m)) {
        $s = [];
        foreach($m as $k=>$v) {
            if(!is_numeric($k)) {
                $s[$k] = $v;
            }
        }

        $a[$s['Code']] = $s;
    }
}

uasort($a, function ($a, $b) {
    if ($a['Name'] == $b['Name']) {
        return 0;
    }
    return ($a['Name'] < $b['Name']) ? -1 : 1;
});

$object = file_get_contents(__DIR__ . '/countries.stub');
$object = str_replace("'@COUNTRIES@'", str_replace(["\r", "\n", "\t"], "", var_export($a, true)), $object);
var_dump(file_put_contents(__DIR__ . '/../src/ElasticEmailData/Countries.php', $object));