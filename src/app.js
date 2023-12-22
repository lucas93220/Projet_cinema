document.addEventListener("DOMContentLoaded", e => {
    // Load the JSON file
    fetch('../api/films.json').then(response => response.json()).then(data => {
        // Get the films elements
        const films = data.films;

        // Create an HTML list
        const list = document.querySelector("ul");

        // Create list items for each films
        for (let i = 0; i < films.length; i++) {
            const film = films[i];
            const listItem = document.createElement('li');
            listItem.innerHTML = `<figure>
                                    <figcaption>
                                        <ul>
                                        <li class="list-primary">Marque : ${film.nom}</li>
                                        <li class="list-secondary">Année : ${film.annee}</li>
                                        <li class="list-primary">Type : ${film.realisateur}</li>
                                        <li class="list-primary">Description : ${film.description}</li>
                                        <li class="list-secondary image"><img src="${film.image}" alt="${film.nom}"></li>
                                        </ul>
                                    </figcaption>
                                </figure>`;

            // Append the list item to the list
            list.appendChild(listItem);
        }
    });
});