<?php

# Vergleich auf Werteungleichheit - Operator '!=' oder '<>'

var_dump(3 != 3);
var_dump(3 != 4);
var_dump(3 != '3');
var_dump(3 != '3.0');
var_dump(3 != '3.0 eine Zahl');
var_dump(TRUE != 'Hallo');
var_dump(FALSE != 'Hallo');
var_dump(NULL != FALSE);
var_dump(NULL == FALSE);
var_dump(NULL == 'hallo');

# Vergleich auf Nichtidentität - Operator '!=='

var_dump(3 !== 3);
var_dump(3 !== 4);
var_dump(3 !== '3');
var_dump(3 !== '3.0');
var_dump(3 !== '3.0 eine Zahl');
var_dump(TRUE !== 'Hallo');
var_dump(FALSE !== 'Hallo');
var_dump(NULL !== FALSE);
var_dump(NULL === FALSE);

// "3 !== '3'" das entspricht folgendem Vergleich : "3 != '3' || gettype(3) != gettype('3')"

// "3 !== '3' == !(3 === '3')"