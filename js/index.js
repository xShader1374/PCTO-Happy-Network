var opened = false;

let modal = new bootstrap.Modal(document.getElementById('mediaInspectorModal'));
var modal_title = document.getElementById('modal-title');
var modal_trailer = document.getElementById('media-trailer-url');
var modal_description = document.getElementById('modal-description');

// cambiare url iframe, cambiare titolo, cambiare description, cambiare

function showModal() {
    opened = true;
    modal.show();
}

function hideModal() {
    opened = false;
    modal.hide();
}

function updateModalInfo(params) {
    
}

function showOrHideModal(id) {
    if (!opened){
        showModal()
    } else {
        hideModal()
    }
}