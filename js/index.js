let modal_title = document.getElementById('modal-title');
let modal_trailer = document.getElementById('modal-iframe');
let modal_description = document.getElementById('modal-description');

// cambiare url iframe, cambiare titolo, cambiare description

function updateModalInfo(title, trailer_url, description) {
    console.log(title);
    console.log(trailer_url);
    console.log(description);
    modal_title.innerText = title;
    modal_description.innerText = description;
    modal_trailer.setAttribute("src", trailer_url);
}
