<?php


/**
 * Extracts a substring from a given string based on the start and end indices.
 *
 * @param string $string The input string from which the substring will be extracted.
 * @param int $indexStart The starting index of the substring. If negative, it is converted to the corresponding positive index.
 * @param int|null $indexEnd The ending index of the substring. If not provided or greater than the length of the string, it is set to the length. If negative, it is converted to the corresponding positive index.
 * @return string The extracted substring.
 */
function mySubstring(string $string, int $indexStart, int $indexEnd = null): string
{
    $result = '';
    $length = strlen($string);

    // If $indexEnd is not provided or greater than the length of the string, set it to the length
    if ($indexEnd === null || $indexEnd > $length) {
        $indexEnd = $length;
    }

    // If $indexStart is negative, convert it to the corresponding positive index
    if ($indexStart < 0) {
        $indexStart = $length + $indexStart;
    }

    // If $indexEnd is negative, convert it to the corresponding positive index
    if ($indexEnd < 0) {
        $indexEnd = $length + $indexEnd;
    }

    // Extract the substring
    for ($i = $indexStart; $i < $indexEnd; $i++) {
        $result .= $string[$i];
    }

    return $result;
}

/**
 * Extracts a substring from a given string based on the start and end indices.
 *
 * @param string $string The input string from which the substring will be extracted.
 * @param int $indexStart The starting index of the substring. If negative, it will be normalized to start from the end of the string.
 * @param int|null $indexEnd The ending index of the substring. If null or greater than the length of the string, it will be set to the length of the string.
 * @return string The extracted substring.
 */
function mySubstring2(string $string, int $indexStart, int $indexEnd = null): string
{
    $length = strlen($string);

    // Normalize negative indices
    $indexStart = $indexStart < 0 ? $length + $indexStart : $indexStart;
    $indexEnd = $indexEnd < 0 ? $length + $indexEnd : $indexEnd;

    // Ensure $indexEnd is not greater than the length of the string
    $indexEnd = $indexEnd === null || $indexEnd > $length ? $length : $indexEnd;

    // Extract the substring
    return substr($string, $indexStart, $indexEnd - $indexStart);
}


/**
 * Extracts a substring from a given string based on the start and end indices.
 *
 * @param string $string The input string from which the substring will be extracted.
 * @param int $indexStart The starting index of the substring. If negative, it will be normalized to start from the end of the string.
 * @param int|null $indexEnd The ending index of the substring. If null or greater than the length of the string, it will be set to the length of the string.
 * @return string The extracted substring.
 */
function mySubstring3(string $string, int $indexStart, int $indexEnd = null): string
{
    $length = strlen($string);

    // Normalize negative indices
    $indexStart = $indexStart < 0 ? $length + $indexStart : $indexStart;
    $indexEnd = $indexEnd < 0 ? $length + $indexEnd : $indexEnd;

    // Ensure $indexEnd is not greater than the length of the string
    $indexEnd = $indexEnd === null || $indexEnd > $length ? $length : $indexEnd;

    // Extract the substring
    $substringArray = array_slice(str_split($string), $indexStart, $indexEnd - $indexStart);

    return join('', $substringArray);
}


function mySubstringRecursive(string $string, int $indexStart, int $indexEnd = null, string $result = ''): string
{
    // If $indexEnd is not provided or greater than the length of the string, set it to the length
    $indexEnd = $indexEnd === null || $indexEnd > strlen($string) ? strlen($string) : $indexEnd;

    // Base case: if the start index is 0 and the end index is 0, return the result
    if ($indexStart == 0 && $indexEnd == 0) {
        return $result;
    }

    // Recursive case: if the start index is greater than 0, remove the first character and decrement the start and end indices
    if ($indexStart > 0) {
        return mySubstringRecursive(substr($string, 1), $indexStart - 1, $indexEnd - 1, $result);
    }

    // Recursive case: if the end index is greater than 0, add the first character to the result and decrement the end index
    if ($indexEnd > 0) {
        return mySubstringRecursive(substr($string, 1), $indexStart, $indexEnd - 1, $result . $string[0]);
    }
}



function mySubstringRecursive2(string $string, int $indexStart, int $indexEnd = null, string $result = ''): string
{
    $length = strlen($string);

    // If $indexEnd is not provided or greater than the length of the string, set it to the length
    $indexEnd = $indexEnd === null || $indexEnd > $length ? $length : $indexEnd;

    // Base case: if the start index is 0 and the end index is 0, return the result
    if ($indexStart == 0 && $indexEnd == 0) {
        return $result;
    }

    // Recursive case: if the start index is greater than 0, remove the first character and decrement the start and end indices
    if ($indexStart > 0) {
        return mySubstringRecursive(substr($string, 1), $indexStart - 1, $indexEnd - 1, $result);
    }

    // Recursive case: if the end index is greater than 0, add the first character to the result and decrement the end index
    if ($indexEnd > 0) {
        return mySubstringRecursive(substr($string, 1), $indexStart, $indexEnd - 1, $result . $string[0]);
    }
}

