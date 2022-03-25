"use strict";

window.onload = init;

function init() {
    // chargement des circuits
    $.ajax({
        url: "ajax/getlescircuits.php",
        type: 'post',
        dataType: "json",
        success: afficher,
        error: reponse => console.error(reponse.responseText)
    });
}

// affichage des données retournées
function afficher(data) {
    let row = document.createElement('div');
    row.classList.add("row");

    for (const grandprix of data) {
        let col = document.createElement('div');
        col.classList.add("col-xl-3", "col-lg-4", "col-md-6", "col-12");

        let carte = document.createElement('div');
        carte.classList.add('card');
        let entete = document.createElement('div');
        entete.classList.add('card-header', 'bg-dark', 'text-white', 'text-center');
        entete.innerText = grandprix.id + " - " + grandprix.nom + " - ";
        carte.appendChild(entete);
        let img =  document.createElement('img');
        img.src = '../pays/' + grandprix.drap;
        img.style.width = "32px";
        img.style.height = "22px";
        img.alt = "";
        entete.appendChild(img);

        let entete2 = document.createElement('div');
        entete2.classList.add('card-header', 'bg-dark', 'text-white', 'text-center');
        entete2.innerText = grandprix.date;
        carte.appendChild(entete2);

        let corps = document.createElement('div');
        corps.classList.add("card-body", "text-center");
        img =  document.createElement('img');
        img.src = 'circuit.image/' + grandprix.logo;
        img.style.width = "150px";
        img.style.height = "150px";
        img.alt = "";
        corps.appendChild(img);
        carte.appendChild(corps);

        let pied = document.createElement('div');
        pied.classList.add('card-footer', 'text-center');
        pied.innerText = grandprix.circuit
        carte.appendChild(pied);

        col.appendChild(carte);
        row.appendChild(col)

        lesCartes.appendChild(row);
    }
}