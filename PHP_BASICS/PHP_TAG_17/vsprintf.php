<?php

// print the string by explode it and set it to the format of vsprintf // adding the 0 to the left
print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));

// even its exploded it will return back to a string
var_dump(vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')));

// returnin the string
vprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));

