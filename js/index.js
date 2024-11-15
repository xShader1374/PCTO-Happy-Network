const pb = new PocketBase('http://127.0.0.1:90');

var modal_title = document.getElementById('modal-title');
var modal_trailer = document.getElementById('modal-iframe');
var modal_description = document.getElementById('modal-description');

// Vuoto nel caso sia un film
var modal_lista_ep_stag = document.getElementById('listaEpisodi-Stagioni');

async function getSeasons(media_id) {
    const resultList = await pb.collection('Stagioni').getList(1, 50, {
        filter: 'serie_tv = "' + media_id + '"',
    });

    return resultList;
}

async function getEpisodes(stagione_id, accordion_button_element_id, accordion_body_id) {
    // DEBUG
    var accordion_button = document.getElementById(accordion_button_element_id);
    var accordion_body = document.getElementById(accordion_body_id);

    // Per evitare che faccia una chiamata API ecc. anche quando lo stiamo chiudendo, facciamo un check
    //
    // Se non è collapsed:
    if (!accordion_button.classList.contains("collapsed")) {

        // Pulisce l'interno dell'html del container prima di metterci le nuove informazioni, altrimenti ci saranno quelle vecchie + quelle nuove
        accordion_body.innerHTML = "";

        const resultList = await pb.collection('Episodi').getList(1, 50, {
            filter: 'stagione = "' + stagione_id + '"',
        });
        
        
        resultList.items.forEach(Episodio => {
            //console.log(`${Episodio.titolo}:\n${Episodio.descrizione}`);
            var contenuto = document.createElement("p");
            contenuto.innerHTML = `${Episodio.titolo} ${Episodio.descrizione}`;
            accordion_body.appendChild(contenuto);
        });
        
        // Cancelliamo l'attributo "onclick", per evitare che esegua nuovamente la funzione
        accordion_button.removeAttribute('onclick');
    }
}

async function updateModalInfo(title, trailer_url, description, media_id, type) { //riceverai array media

    // Cambia url iframe, Cambiare titolo, Cambiare description
    modal_title.innerText = title;
    modal_description.innerText = description;
    modal_trailer.setAttribute("src", trailer_url);
 
    // TODO: Una chiamata per prendere le stagioni e per ogni stagione fare una chiamata per prendere la lista degli episodi e per ogni episodio fare una chiamata per prendere il nome dell'episodio

    if (type === "serie_tv") {
        var stagioni = await getSeasons(media_id);
        stagioni = stagioni.items;

        console.log(stagioni);
        
        var titoli_e_id = [];

        var episodi = [];

        stagioni.forEach((stagione, index) => {
            var titolo = `${stagione.nome} (${stagione.n_episodi})`;
            console.log(`${index + 1}) ${titolo} serie_tv: ${stagione.id}`);
            var temp = {
                "titolo": titolo,
                "id": stagione.id
            }
            titoli_e_id.push(temp);
        });

        console.log(titoli_e_id);

        // Pulisce l'interno dell'html del container prima di metterci le nuove informazioni, altrimenti rimarranno quelle vecchie
        modal_lista_ep_stag.innerHTML = "";

        titoli_e_id.forEach((stagione_info, index) => {
            // Crea un nuovo elemento div per rappresentare ogni stagione
            const stagione_elem = document.createElement('div');
            stagione_elem.classList.add('accordion-item-dark');
          
            // Crea l'intestazione della stagione
            const intestazione = document.createElement('h2');
            intestazione.classList.add('accordion-header');
            
            const bottone = document.createElement('button');
            bottone.classList.add('accordion-button', 'btn', 'Navbar-Button', 'collapsed');
            bottone.setAttribute('type', 'button');
            bottone.setAttribute('data-bs-toggle', 'collapse');
            bottone.setAttribute('data-bs-target', `#collapse-${stagione_info.id}-${index + 1}`);
            bottone.setAttribute('aria-expanded', 'false');
            bottone.setAttribute('aria-controls', `collapse-${stagione_info.id}-${index + 1}`);
            bottone.setAttribute('id', `collapse-button-${stagione_info.id}-${index + 1}`);
            bottone.textContent = stagione_info.titolo;
          
            intestazione.appendChild(bottone);
            stagione_elem.appendChild(intestazione);
          
            // Crea il corpo collassabile della stagione
            const corpo_stagione = document.createElement('div');
            corpo_stagione.classList.add('accordion-collapse', 'collapse');
            corpo_stagione.setAttribute('id', `collapse-${stagione_info.id}-${index + 1}`);
            corpo_stagione.setAttribute('data-bs-parent', '#listaEpisodi-Stagioni');
          
            const corpo_interno = document.createElement('div');
            corpo_interno.classList.add('accordion-body');
          
            // Qui dovresti aggiungere il contenuto degli episodi per questa stagione
            corpo_interno.setAttribute('id', `collapse-body-${stagione_info.id}-${index + 1}`);
            
            corpo_stagione.appendChild(corpo_interno);
            stagione_elem.appendChild(corpo_stagione);
            
            bottone.setAttribute('onclick', `getEpisodes("${stagione_info.id}", "collapse-button-${stagione_info.id}-${index + 1}", "${corpo_interno.getAttribute('id')}")`);
            
            // Aggiungi l'elemento della stagione al contenitore delle stagioni
            modal_lista_ep_stag.appendChild(stagione_elem);
          });
    }
}

