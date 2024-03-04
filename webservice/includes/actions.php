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
            "author" => "Travis Baldree",
        ],
        [
            "id" => 2,
            "title" => "A Deadly Education",
            "author" => "Naomi Novik",
        ],
        [
            "id" => 3,
            "title" => "Good Omens",
            "author" => "Terry Pratchet & Neil Gaiman",
        ],
        [
            "id" => 4,
            "title" => "Six of Crows",
            "author" => "Leigh Bardugo",
        ],
        [
            "id" => 5,
            "title" => "The Midnight Library",
            "author" => "Matt Haig",
        ],
        [
            "id" => 6,
            "title" => "They Both Die at the End",
            "author" => "Adam Silvera",
        ],
        [
            "id" => 7,
            "title" => "The Song of Achilles",
            "author" => "Madeline Miller",
        ],
        [
            "id" => 8,
            "title" => "Circe",
            "author" => "Madeline Miller",
        ],
        [
            "id" => 9,
            "title" => "A Game of Thrones",
            "author" => "George R.R. Martin",
        ],
        [
            "id" => 10,
            "title" => "The Chalice of the Gods",
            "author" => "Rick Riordan",
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
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}
