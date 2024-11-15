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

async function getEpisodes(stagione_id) {
    const resultList = await pb.collection('Episodi').getList(1, 50, {
        filter: 'stagione = "' + stagione_id + '"',
    });

    return resultList;
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
            console.log(`${index + 1}) ${titolo} serie_tv: ${stagione.serie_tv}`);
            var temp = {
                "titolo": titolo,
                "id": stagione.serie_tv
            }
            titoli_e_id.push(temp);
        });

        console.log(titoli_e_id);

        asynctitoli_e_id.forEach(stagione_info => {
            var temp_ep = await getEpisodes(stagione_info.id);
            episodi.push(temp_ep);
        });

        var episodi = getEpisodes(season_id);
        
        modal_lista_ep_stag.innerHTML = episodi
            .map(episode => `
            <div class="accordion" id="listaEpisodi-Stagioni">
				<div class="accordion-item-dark">
                    <h2 class="accordion-header">
                        <button class="accordion-button ${episode.index !== 1 ? 'collapsed' : ''} btn Navbar-Button" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse${episode.index}" 
                                aria-expanded="${episode.index === 1 ? 'true' : 'false'}" 
                                aria-controls="collapse${episode.index}">
                            ${episode.title}
                        </button>
                    </h2>
                    <div id="collapse${episode.index}" 
                        class="accordion-collapse collapse ${episode.index === 1 ? 'show' : ''}" 
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ${episode.content}
                        </div>
                    </div>
                </div>			
			</div>
            
        `).join('');
        
    }
}

