<?php

require 'vendor/autoload.php';
require 'Manga.php';

use Manga\Manga;



$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$mangaInstance = new Manga();
$hello = $mangaInstance->sayhello();





if(isset($_GET['content']) && $_GET['content'] == 'manga'){

    echo $twig->render('premier.html.twig', [
        'name' => 'Jordan',
        'bonjour' => $hello,
        'bonja' => 'hello'
        ]);
} else {
    echo $twig->render('deuxieme.html.twig', ['name' => 'Fabien']);
}