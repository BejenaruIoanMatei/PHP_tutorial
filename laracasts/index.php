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

        $filterByAuthor = function (array $books, string $author): array 
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        };

        $filteredBooks = filterByAuthor($books, 'Author Book 1');


        function filter( $items,  $key, $value): array {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($item[$key] === $value) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        function filterAdvanced($items, $fn) 
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $resultfiltered = filterAdvanced($books, function($book){
            return $book['releaseYear'] >= 2000;
        });


        $res = array_filter($books, function($book){
            return $book['releaseYear'] < 2000;
        });

require "index.view.php";