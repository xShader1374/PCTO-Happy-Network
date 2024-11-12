var currPage = "Esplora";

window.addEventListener("load", (event) => {
    document.title = "S&F - " + currPage;
});

function aggiornaTitolo(index){
    switch (index) {
        case 0:
            currPage = "Esplora";
            break;
        case 1:
            currPage = "Serie TV";
            break
        case 2:
            currPage = "Film";
            break;
        default:
            currPage = "";
            break;
    }

    document.title = "S&F - " + currPage;
}

function get_curr_title() {
    return currPage
}