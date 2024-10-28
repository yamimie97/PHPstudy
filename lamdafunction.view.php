<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['owner'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseyear'];?>) by <?= $book['author'] ?>
                </a>   
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>