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
                'owner' => 'Professor Oak'
            ],
            [
                'name' => 'Dota2',
                'author' => 'Pudge',
                'owner' => 'Valve'
            ]
        ];
    ?>

    <p>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['owner'] ?>">
                    <?= $book['name']; ?>
                </a>   
            </li>
        <?php endforeach ?>
    </p>
</body>
</html>