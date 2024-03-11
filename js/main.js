window.addEventListener('load', init);

//Globals
const apiUrl = 'http://localhost/prg03-eindopdracht/webservice/json.php';
let bookDetails = {};
let bookGallery;
let dialog;
let dialogContent;
let dialogClose;

function init()
{
    bookGallery = document.getElementById('book-gallery');
    bookGallery.addEventListener('click', bookClickHandler);

    dialog = document.getElementById('book-detail');
    dialogContent = document.getElementById('modal-content');
    dialogClose = document.getElementById('modal-close');
    dialogClose.addEventListener('click', dialogCloseHandler);

    getBookData(apiUrl, dataSuccessHandler);
}

function getBookData(url, successFunction)
{
    console.log(url)
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
    console.log(books);
    for (const book of books) {
        let newDiv = document.createElement('div');

        newDiv.classList.add('book-box');
        newDiv.dataset.title = book.title;
        bookGallery.appendChild(newDiv);

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

    let button = document.createElement('button');
    button.innerText = "More info";
    button.dataset.name = bookData.title;
    div.appendChild(button);

    bookDetails[bookData.title] = bookData;
    console.log(bookDetails)
}

function bookClickHandler(e)
{
    if(e.target.nodeName !== 'BUTTON') {
        return;
    }

    dialog.showModal();
    dialogContent.innerHTML = "";

    // console.log(e.target.dataset.id);
    let book = bookDetails[e.target.dataset.name];

    let title = document.createElement('h1');
    title.innerText = `${book.title}`
    dialogContent.appendChild(title);

    let image = document.createElement('img');
    image.src = book.cover;
    dialogContent.appendChild(image);

}

function dialogCloseHandler(e)
{
    dialog.close();
}

function errorHandler(error)
{
    console.error(error);
}
