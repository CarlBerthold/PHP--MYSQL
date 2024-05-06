<?php

echo intval(42) . PHP_EOL;
echo intval(4.2) . PHP_EOL;
echo intval(4.8) . PHP_EOL;
echo intval('42') . PHP_EOL;
echo intval('+42') . PHP_EOL;
echo intval('-42') . PHP_EOL;
echo intval('42.1') . PHP_EOL;
echo intval('+42.1') . PHP_EOL;
echo intval('-42.1') . PHP_EOL;
echo intval(042) . PHP_EOL;
echo intval('042') . PHP_EOL;
echo intval(1e10) . PHP_EOL;
echo intval('1e10') . PHP_EOL;
echo intval(0x1A) . PHP_EOL;
echo intval(42000000) . PHP_EOL;
echo intval(420000000000000000000) . PHP_EOL;
echo intval('420000000000000000000') . PHP_EOL;
echo intval(42, 8) . PHP_EOL;
echo intval('42', 8) . PHP_EOL;
echo intval(array()) . PHP_EOL;
echo intval(array('foo', 'bar')) . PHP_EOL;
echo intval(false) . PHP_EOL;
echo intval(true) . PHP_EOL;
echo intval('Die Antwort lautet 42') . PHP_EOL;