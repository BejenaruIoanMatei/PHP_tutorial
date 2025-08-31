<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $books = [
            [
                'name' => 'Book 1',
                'author'=> 'Author Book 1',
                'price'=> 20,
                'releaseYear'=> 1968,
                'url'=> 'example.com',
            ],
            [
                'name' => 'Book 2',
                'author'=> 'Author Book 2',
                'price'=> 39,
                'releaseYear'=> 2021,
                'url'=> 'example.com',
            ],
            [
                'name' => 'Book 3',
                'author'=> 'Author Book 3',
                'price'=> 18,
                'releaseYear'=> 2011,
                'url'=> 'example.com',
            ]
        ];

        function filterByAuthor(array $books, string $author): array {
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
            foreach (filterByAuthor($books, 'Author Book 1') as $element) :
                echo "<h1>{$element['author']}</h1>";
            endforeach;
        ?>
    </p>

</body>
</html>