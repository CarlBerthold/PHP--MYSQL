<?php

require_once __DIR__  . '/Book4.php';

$book = new Book(
    [
        'title' => 'PHP 8 - Der Einstieg in die moderne Webentwicklung',
        'description' => 'PHP ist eine der beliebtesten Programmiersprachen der Welt und wird für die Entwicklung dynamischer Webseiten und Webanwendungen verwendet.',
        'author' => 'Thomas Theis',
        'genre' => 'Fachbuch',
        'netPrice' => 29.95,
        'ebook' => false,
    ]
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $book->getTitle() ?></h2>
    <p><?= $book->getDescription() ?></p>
    <p><cite><?= $book->getAuthor() ?></cite></p>
    <ul>
        <li><?= $book->getGenre() ?></li>
        <li><?= ($book->getEbook()) ? 'ebook' : 'print' ?></li>
        <li><?= $book->getNetPrice() . '$' ?></li>
        <li><?= $book->getTax() . '%' ?></li>
        <li><?= $book->getGrossPrice() . '$' ?></li>
    </ul>

    ____________________________________________________________________________________________

    <h2><?= $book->title ?></h2>
    <p><?= $book->description ?></p>
    <p><cite><?= $book->author ?></cite></p>
    <ul>
        <li><?= $book->genre ?></li>
        <li><?= ($book->ebook) ? 'ebook' : 'print' ?></li>
        <li><?= $book->getNetPrice() . '$' ?></li>
        <li><?= $book->getTax() . '%' ?></li>
        <li><?= $book->grossPrice . '$' ?></li>
    </ul>
</body>
</html>