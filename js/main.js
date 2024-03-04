window.addEventListener('load', init);

let author;
let genre;
let infoSpace;

function init()
{
    infoSpace = document.getElementById('info-space');
}

function showBookClick(button)
{
    infoSpace.innerHTML = "";

    if (button === 1){
        author = "Travis Baldree";
        genre = "Romance and Fantasy"
    } if (button === 2){
        author = "Naomi Novik";
        genre = "Fantasy and Dark Academia"
    }

    let info = document.createElement('p');

    infoSpace.appendChild(info);

    info.innerText = `- ${author}
                       - ${genre}`
}
