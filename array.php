<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended books</h1>

    <?php 
        $books = [
            "Pokemon",
            "Korean series",
            "Archers"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>