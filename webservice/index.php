<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getBooks();
} else {
    $data = getBookDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
header("Content-Type: application/json");
echo json_encode($data);
exit;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/main.js" defer></script>
    <title>Document</title>
</head>
<body>

<header>
    <h1>Book Magazine</h1>
</header>

<main>

    <section id="book-column">
        <div>
            <div class="book-flex">
                <div class="book-box">
                    <h2>Legends and Lattes</h2>
                    <div class="book-img-box">
                        <img src="../img/Legends&Lattes.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>

                <div class="book-box">
                    <h2>A Deadly Education</h2>
                    <div class="book-img-box">
                        <img src="../img/DeadlyEducation.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>
            </div>

            <div class="book-flex">
                <div class="book-box">
                    <h2>Good Omens</h2>
                    <div class="book-img-box">
                        <img src="../img/GoodOmens.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>

                <div class="book-box">
                    <h2>Six of Crows</h2>
                    <div class="book-img-box">
                        <img src="../img/SixofCrows.jpeg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>
            </div>

            <div class="book-flex">
                <div class="book-box">
                    <h2>The Midnight Library</h2>
                    <div class="book-img-box">
                        <img src="../img/MidnightLibrary.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>

                <div class="book-box">
                    <h2>They Both Die at the End</h2>
                    <div class="book-img-box">
                        <img src="../img/TheyBothDie.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>
            </div>

            <div class="book-flex">
                <div class="book-box">
                    <h2>The Song of Achilles</h2>
                    <div class="book-img-box">
                        <img src="../img/SongofAchilles.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>

                <div class="book-box">
                    <h2>Circe</h2>
                    <div class="book-img-box">
                        <img src="../img/Circe.jpeg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>
            </div>

            <div class="book-flex">
                <div class="book-box">
                    <h2>A Game of Thrones</h2>
                    <div class="book-img-box">
                        <img src="../img/GameofThrones.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>

                <div class="book-box">
                    <h2>The Chalice of the Gods</h2>
                    <div class="book-img-box">
                        <img src="../img/ChaliceofthegGods.jpg" class="book-img">
                    </div>
                    <button>Add to favorites</button>
                    <button>Show book</button>
                </div>
            </div>
        </div>

        <div id="extra-room">

        </div>
    </section>

</main>

<footer>

</footer>


</body>
</html>
