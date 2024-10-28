<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
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
        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'YHW') as $book) : ?>
            <li>
                <a href="<?= $book['owner'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseyear'];?>) by <?= $book['author'] ?>
                </a>   
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>