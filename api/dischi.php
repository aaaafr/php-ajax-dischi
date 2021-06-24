<?php 
$album = [
    [
        'poster' => '',
        'title' => 'New Jersey',
        'singer' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'poster' => '',
        'title' => 'Live at Wembley 86',
        'singer' => 'Queen',
        'year' => '1992',
    ],
    [
        'poster' => '',
        'title' => 'Ten s Summoner s Tales',
        'singer' => 'Sting',
        'year' => '1993',
    ],
    [
        'poster' => '',
        'title' => 'Steve Gadd Band',
        'singer' => 'Steve Gadd Band',
        'year' => '2018',
    ],
    [
        'poster' => '',
        'title' => 'Brave new World',
        'singer' => 'Iron Maiden',
        'year' => '2000',
    ],
    [
        'poster' => '',
        'title' => 'One more car,one more raider',
        'singer' => 'Eric Clapton',
        'year' => '2002',
    ],
    [
        'poster' => '',
        'title' => 'Made in Japan',
        'singer' => 'Deep Purple',
        'year' => '1972',
    ],
    [
        'poster' => '',
        'title' => 'Hard Wired',
        'singer' => 'Dave Weckl',
        'year' => '1994',
    ],
    [
        'poster' => '',
        'title' => 'Bad',
        'singer' => 'Michael Jackson',
        'year' => '1987',
    ],
    [
        'poster' => '',
        'title' => 'And Justice for All',
        'singer' => 'Metallica',
        'year' => '1988',
    ],
];

header('Content-Type: application/json');

echo json_encode($album);
