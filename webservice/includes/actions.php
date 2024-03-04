<?php
/**
 * @return array
 */
function getBooks()
{
    return [
        [
            "id" => 1,
            "title" => "Legends and Lattes",
        ],
        [
            "id" => 2,
            "title" => "A Deadly Education",
        ],
        [
            "id" => 3,
            "title" => "Good Omens",
        ],
        [
            "id" => 4,
            "title" => "Six of Crows",
        ],
        [
            "id" => 5,
            "title" => "The Midnight Library",
        ],
        [
            "id" => 6,
            "title" => "They Both Die at the End",
        ],
        [
            "id" => 7,
            "title" => "The Song of Achilles",
        ],
        [
            "id" => 8,
            "title" => "Circe",
        ],
        [
            "id" => 9,
            "title" => "A Game of Thrones",
        ],
        [
            "id" => 10,
            "title" => "The Chalice of the Gods",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getBookDetails($id)
{
    $tags = [
        1 => [
            "author" => "Travis Baldree",
            "genre" => ['Romance', 'Fantasy']
        ],
        2 => [
            "author" => "Naomi Novik",
            "genre" => ['Fantasy', 'Dark Academia']
        ],
        3 => [
            "author" => "Terry Pratchet & Neil Gaiman",
            "genre" => ['Mythology','Adventure']
        ],
        4 => [
            "author" => "Leigh Bardugo",
            "genre" => ['YA', 'Fantasy']
        ],
        5 => [
            "author" => "Matt Haig",
            "genre" => ['Fantasy']
        ],
        6 => [
            "author" => "Adam Silvera",
            "genre" => ['Romance','YA']
        ],
        7 => [
            "author" => "Madeline Miller",
            "genre" => ['Greek Mythology','Romance']
        ],
        8 => [
            "author" => "Madeline Miller",
            "genre" => ['Greek Mythology']
        ],
        9 => [
            "author" => "George R.R. Martin",
            "genre" => ['Fantasy']
        ],
        10 => [
            "author" => "Rick Riordan",
            "genre" => ['Middle Grade', 'Greek Mythology']
        ],
    ];

    return $tags[$id];
}
