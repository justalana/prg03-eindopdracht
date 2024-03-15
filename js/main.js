window.addEventListener('load', init);

//Globals
const apiUrl = 'http://localhost/prg03-eindopdracht/webservice/json.php';
let bookDetails = {};
let bookTitles = [];
let setFaveBooks = [];
let getFaveBooks = [];
let bookGallery;
let dialog;
let dialogContent;
let dialogClose;

function init()
{
    // localStorage.clear();
    bookGallery = document.getElementById('book-gallery');
    bookGallery.addEventListener('click', bookClickHandler);

    dialog = document.getElementById('book-detail');
    dialogContent = document.getElementById('modal-content');
    dialogClose = document.getElementById('modal-close');
    dialogClose.addEventListener('click', dialogCloseHandler);

    // loadFaves();
    getBookData(apiUrl, dataSuccessHandler);
}

function getBookData(url, successFunction)
{
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json()
        })
        .then(successFunction)
        .catch(errorHandler)
}

function dataSuccessHandler(books)
{
    for (const book of books) {
        let newDiv = document.createElement('div');

        newDiv.classList.add('book-box');
        newDiv.dataset.title = book.title;
        newDiv.dataset.fave = "false";
        bookGallery.appendChild(newDiv);
        bookTitles.push(book.title);

        let url = "http://localhost/prg03-eindopdracht/webservice/json.php?id=" + book.id;
        getBookData(url, bookSuccessHandler);
    }
}

function bookSuccessHandler(bookData)
{
    let div = document.querySelector(`.book-box[data-title='${bookData.title}']`);

    let title = document.createElement('h2');
    title.innerText = `${bookData.title}`
    div.appendChild(title);

    let image = document.createElement('img');
    image.src = bookData.cover;
    div.appendChild(image);

    let infoButton = document.createElement('button');
    infoButton.innerText = "More info";
    infoButton.dataset.name = bookData.title;
    div.appendChild(infoButton);

    let faveButton = document.createElement('button');
    faveButton.classList.add('fave-button');
    faveButton.innerText = "Add to favorites";
    faveButton.dataset.name = bookData.title;
    div.appendChild(faveButton);

    let removeFaveButton = document.createElement('button');
    removeFaveButton.innerText = "Remove from favorites";
    removeFaveButton.dataset.name = bookData.title;
    div.appendChild(removeFaveButton);

    bookDetails[bookData.title] = bookData;
}

function bookClickHandler(e)
{
    let book = bookDetails[e.target.dataset.name];

    if(e.target.innerText === "More info") {
        dialog.showModal();
        dialogContent.innerHTML = "";

        let title = document.createElement('h2');
        title.innerText = `${book.title}`
        dialogContent.appendChild(title);

        let image = document.createElement('img');
        image.src = book.cover;
        dialogContent.appendChild(image);

        let author = document.createElement('p');
        author.innerText = `Author: ${book.author}`
        dialogContent.appendChild(author);

        let genre = document.createElement('p');
        genre.innerText = `Genre:`
        dialogContent.appendChild(genre);

        let ul = document.createElement('ul');
        genre.appendChild(ul);
        for (let i = 0; i < book.genre.length; i++) {
            let li = document.createElement('li')
            li.innerText = `${book.genre[i]}`;
            ul.appendChild(li);
        }
    } if(e.target.innerText === "Add to favorites") {
        addToFave(book);
    } if(e.target.innerText === "Remove from favorites") {
        let item = setFaveBooks.indexOf(book.title);
        setFaveBooks.splice(item, 1);
        loadFaves();
    }
}

function addToFave(newFave)
{
    setFaveBooks.push(newFave.title)
    // console.log(newFave);
    localStorage.setItem("setFaveBooks", JSON.stringify(setFaveBooks))
    loadFaves();
}

function loadFaves()
{
    let stored = localStorage.getItem("setFaveBooks")
    if (stored) {
        getFaveBooks = JSON.parse(stored);
        console.log(getFaveBooks);
        for (let i = 0; i < getFaveBooks.length; i++) {
            let element = document.querySelector(`.book-box[data-title='${getFaveBooks[i]}']`);
            element.dataset.fave = "true";
            let fave = element.dataset.fave;
            let title = element.dataset.title;
            console.log(fave, title)
        }

    }

}



function dialogCloseHandler(e)
{
    dialog.close();
}

function errorHandler(error)
{
    console.error(error);
}
