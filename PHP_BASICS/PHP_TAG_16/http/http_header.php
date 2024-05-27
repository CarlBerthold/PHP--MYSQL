<?php


// header('Location: https://insomnia.rest');
//header('Location: https://www.wikipedia.de', TRUE, 307); // setting statuscode for redirecting 

//named parameters for setting statuscodes
header(
    header: 'Location: https://www.wikipedia.de', 
    response_code: 307
); // setting statuscode for redirecting
exit; // stop the script after redirecting



/**
 * Redirects the user to a specified URL with an optional HTTP status code.
 *
 * @param string $url The URL to redirect to.
 * @param int $statuscode The HTTP status code to use for the redirect. Default is 307 (Temporary Redirect).
 * @return never This function never returns as it exits the script after performing the redirect.
 */
function redirect(string $url, int $statuscode = 307) : never
{
    header("Location: $url", TRUE, $statuscode);
    exit;
}

redirect('https://www.wikipedia.de', 307);





echo 'Hello World'; // this will not be executed
file_put_contents(__DIR__ . '/header.log', 'weiterleitung auf Wikipedia');


//named parameters

function example($value1 = 1, $value2 = 2, $value3 = 'Hello') 
{
   var_dump($value1, $value2, $value3);
}

example(); // => 1, 2, 'Hello'
example(4, 6); // => 4, 6, 'Hello'
example(4, 6, 'World'); // => 4, 6, 'World'

example(value3: 'World'); // => 1, 2, 'World'

