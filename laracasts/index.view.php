<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'Author Book 1') : ?>
            <h1>
                <li>
                    <?= $book['name'] ?> by <?= $book['author'] ?>
                    <a href="<?= $book['url'] ?>">
                    <br>
                    Buy <?= $book['name'] ?>
                    Here !
                </a>
                </li>
            </h1>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?php 
            $filteredByAuthor = filter($books, 'author', 'Author Book 1');
            foreach ($filteredByAuthor as $author) {
                echo $author['author'];
            }

            $filteredByRelease = filter($books, 'releaseYear', 2011);
            foreach ($filteredByRelease as $release) {
                echo "<br> {$release['name']} - {$release['releaseYear']}";
            }
            echo "<br> <h3>{$res[0]['name']}</h3>";
        ?>
    </p>

    <p>
        <?php
        
            foreach (filterByAuthor($books, 'Author Book 1') as $element) :
                echo "<h1>{$element['author']}</h1>";
            endforeach;

            echo "<h1>$resultfiltered</h1>";
        ?>
    </p>

</body>
</html>