<?php



$foo = 2;
echo $foo++; // 2





    $x = 1;
    $y = 2;
    $z = 3;

    switch($x) {
        case 0:
        $x++;
        $z = $x + 1; // z=2
        break;
        case 1:
            $y = $z + $x; // y=4
            break;
        default:
            $z = $z + $x; // z=4
            break;
    }
    






