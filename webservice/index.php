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
    <title>Document</title>
</head>
<body>

<header>
    <h1>Book Magazine</h1>
</header>

<main>

    <section id="book-column">
        <div class="book-box">
            <h3>Legends and Lattes</h3>
            <div class="book-img-box">
                    <img src="./images/percy-jackson.jpg" class="book-img">
            </div>
            <button>Add to favorites</button>
            <button>Show book</button>
        </div>

        <div class="book-box">
            <h3>A Deadly Education</h3>
            <div class="book-img-box">
                <img src="./images/percy-jackson.jpg" class="book-img">
            </div>
            <button>Add to favorites</button>
            <button>Show book</button>
        </div>

        <div class="book-box">
            <h3>Good Omens</h3>
            <div class="book-img-box">
                <img src="./images/percy-jackson.jpg" class="book-img">
            </div>
            <button>Add to favorites</button>
            <button>Show book</button>
        </div>

        <div class="book-box">
            <h3>Six of Crows</h3>
            <div class="book-img-box">
                <img src="./images/percy-jackson.jpg" class="book-img">
            </div>
            <button>Add to favorites</button>
            <button>Show book</button>
        </div>
    </section>

</main>

<footer>

</footer>


</body>
</html>
