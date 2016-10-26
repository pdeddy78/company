<?php
$conf = parse_ini_file('/var/conf.ini', true);
return [
    'adminEmail' => $conf['adminEmail'],
    'adminPhone' => $conf['adminPhone'],
];
