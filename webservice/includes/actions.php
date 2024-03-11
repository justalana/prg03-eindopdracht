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
            "title" => "Legends and Lattes",
            "cover" => "img/Legends&Lattes.jpg",
            "author" => "Travis Baldree",
            "genre" => ['Romance', 'Fantasy']
        ],
        2 => [
            "title" => "A Deadly Education",
            "cover" => "img/DeadlyEducation.jpg",
            "author" => "Naomi Novik",
            "genre" => ['Fantasy', 'Dark Academia']
        ],
        3 => [
            "title" => "Good Omens",
            "cover" => "img/GoodOmens.jpg",
            "author" => "Terry Pratchet & Neil Gaiman",
            "genre" => ['Mythology','Adventure']
        ],
        4 => [
            "title" => "Six of Crows",
            "cover" => "img/SixofCrows.jpeg",
            "author" => "Leigh Bardugo",
            "genre" => ['YA', 'Fantasy']
        ],
        5 => [
            "title" => "The Midnight Library",
            "cover" => "img/MidnightLibrary.jpg",
            "author" => "Matt Haig",
            "genre" => ['Fantasy']
        ],
        6 => [
            "title" => "They Both Die at the End",
            "cover" => "img/TheyBothDie.jpg",
            "author" => "Adam Silvera",
            "genre" => ['Romance','YA']
        ],
        7 => [
            "title" => "The Song of Achilles",
            "cover" => "img/SongofAchilles.jpg",
            "author" => "Madeline Miller",
            "genre" => ['Greek Mythology','Romance']
        ],
        8 => [
            "title" => "Circe",
            "cover" => "img/Circe.jpeg",
            "author" => "Madeline Miller",
            "genre" => ['Greek Mythology']
        ],
        9 => [
            "title" => "A Game of Thrones",
            "cover" => "img/GameofThrones.jpg",
            "author" => "George R.R. Martin",
            "genre" => ['Fantasy']
        ],
        10 => [
            "title" => "The Chalice of the Gods",
            "cover" => "img/ChaliceofthegGods.jpg",
            "author" => "Rick Riordan",
            "genre" => ['Middle Grade', 'Greek Mythology']
        ],
    ];

    return $tags[$id];
}
