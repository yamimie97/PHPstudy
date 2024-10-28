<?php 

$books = [
    [
        'name' => 'Pokemon',
        'author' => 'Ash',
        'owner' => 'Professor Oak',
        'releaseyear' => '1990'
    ],
    [
        'name' => 'Dota2',
        'author' => 'Pudge',
        'owner' => 'Valve',
        'releaseyear' => '2013'
    ],
    [
        'name' => 'Mie',
        'author' => 'YHW',
        'owner' => 'Dad&Mom',
        'releaseyear' => '1996'
    ]
];
/*function filter($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}*/

$filteredBooks = array_filter($books, function($book) {
    return $book['releaseyear'] < 2000;
});

require "lamdafunction.view.php";
?>