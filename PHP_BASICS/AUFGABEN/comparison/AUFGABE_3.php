<?php

/**
 * Checks if a string starts with a specific substring.
 *
 * @param string $haystack The string to search in.
 * @param string $needle The substring to search for.
 * @return bool Returns true if the string starts with the specified substring, false otherwise.
 */
function my_str_starts_with($haystack, $needle) :bool 
{
    return substr($haystack, 0, strlen($needle)) === $needle;
}

// echo gettype(my_str_starts_with('Hallo Welt', 'Hal'));


echo my_str_starts_with('Hallo Welt', 'Hal');