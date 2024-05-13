<?php

$month = 'Feb.';

/**
 * Determines the number of days in a given month.
 *
 * @param mixed $month The month to check. Can be a string (full name or abbreviation) or a numeric value.
 * @return void
 */
switch($month) {
    case 'Januar':
    case 'Jan.':
    case 1:
    case 'März':
    case 'Mrz.':
    case 3:
    case 'Mai':
    case 5:
    case 'Juli':
    case 'Jul.':
    case 7:
    case 'August':
    case 'Aug.':
    case 8:
    case 'Oktober':
    case 'Okt.':
    case 10:
    case 'Dezember':
    case 'Dez.':
    case 12:
        echo "Dieser Monat hat 31 Tage.";
        break;
    case 'April':
    case 'Apr.':
    case 4:
    case 'Juni':
    case 'Jun.':
    case 6:
    case 'September':
    case 'Sep.':
    case 9:
    case 'November':
    case 'Nov.':
    case 11:
        echo "Dieser Monat hat 30 Tage.";
        break;
    case 'Februar':
    case 'Feb.':
    case 2:
        echo "Dieser Monat hat 28 Tage.";
        break;
    default:
        echo "Dieser Monat ist mir nicht bekannt.";
        break;
}



/**
 * Determines the number of days in a given month using a match expression.
 *
 * @param mixed $month The month to check. Can be a string or an integer.
 * @return string The result indicating the number of days in the given month.
 */

$month = 'Jul';

echo match($month) {
    'Januar', 'Jan.', 1, 
    'März', 'Mrz.', 3, 
    'Mai', 5, 
    'Juli', 'Jul.', 7, 
    'August', 'Aug.', 8, 
    'Oktober', 'Okt.', 10, 
    'Dezember', 'Dez.', 12 => "Dieser Monat hat 31 Tage.",
    'April', 'Apr.', 4, 
    'Juni', 'Jun.', 6, 
    'September', 'Sep.', 9, 
    'November', 'Nov.', 11 => "Dieser Monat hat 30 Tage.",
    'Februar', 'Feb.', 2 => "Dieser Monat hat 28 Tage.",
    default => "Dieser Monat ist mir nicht bekannt."
};



/**
 * Returns the number of days in a given month.
 *
 * @param string|int $month The month name or number.
 * @return int|null The number of days in the month, or null if the month is not recognized.
 */
function getDaysInMonth(string|int $month) : int|null {
    return match($month) {
        'Januar', 'Jan.', 1, 
        'März', 'Mrz.', 3, 
        'Mai', 5, 
        'Juli', 'Jul.', 7, 
        'August', 'Aug.', 8, 
        'Oktober', 'Okt.', 10, 
        'Dezember', 'Dez.', 12 => 31,
        'April', 'Apr.', 4, 
        'Juni', 'Jun.', 6, 
        'September', 'Sep.', 9, 
        'November', 'Nov.', 11 => 30,
        'Februar', 'Feb.', 2 => 28,
        default => null
    };
}

$days = getDaysInMonth(5);

if ($days) {
    echo "Dieser Monat hat $days Tage.";
} else {
    echo "Dieser Monat ist mir nicht bekannt.";
}





$month = 'Februar'; 

$monthsWith31Days = ['Januar', 'März', 'Mai', 'Juli', 'August', 'Oktober', 'Dezember'];
$monthsWith30Days = ['April', 'Juni', 'September', 'November'];

if (in_array($month, $monthsWith31Days)) {
    echo "Dieser Monat hat 31 Tage.";
} elseif (in_array($month, $monthsWith30Days)) {
    echo "Dieser Monat hat 30 Tage.";
} elseif ($month == 'Februar') {
    echo "Dieser Monat hat 28 Tage.";
} else {
    echo "Dieser Monat ist mir nicht bekannt.";
}

?>