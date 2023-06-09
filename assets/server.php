<?php

$arrayMusic = file_get_contents('arrayMusics.json');

/*
$arrayMusic = [
    [
        'image' => 'img/515kBetVK-L._UF10001000_QL80_.jpg',
        'name' => 'New Jersey',
        'artist' => 'Bon Jovi',
        'date' => '1988',
    ],
    [
        'image' => 'img/71g40mlbinL._UF10001000_QL80_.jpg',
        'name' => 'Live at Wembley 86',
        'artist' => 'Queen',
        'date' => '1992',
    ],
    [
        'image' => 'img/513ynFqGo6L._UF10001000_QL80_.jpg',
        'name' => "Ten's Summoner's Tales",
        'artist' => 'Sting',
        'date' => '1993',

    ],
    [
        'image' => 'img/R-11780040-1642836415-5710.jpg',
        'name' => 'Steve Gadd Band',
        'artist' => 'Steve Gadd Band',
        'date' => '2018',

    ],
    [
        'image' => 'img/51g8WnA9bVL._AC_UF10001000_QL80_.jpg',
        'name' => 'Brave New World',
        'artist' => 'Iron Maiden',
        'date' => '2000',

    ],
    [
        'image' => 'img/713t9D4S-7L._UF10001000_QL80_.jpg',
        'name' => 'One More Car, One More Rider',
        'artist' => 'Eric Clapton',
        'date' => '2002',

    ],
];
*/

header('content-type: application/json');
echo $arrayMusic;
/*echo json_encode($arrayMusic);*/

/*$json_string = json_encode($arrayMusic);
file_put_contents('arrayMusics.json', $json_string);*/