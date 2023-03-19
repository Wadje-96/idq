//initialisations 
var dataUsers = []

//fonction de recupération de tous les utilisateurs coté serveur par un appel GET REST
const getAllUtilisateurs = async () => {
    const response = await fetch('http://localhost/identiteQuebec1/tp2/index.php');
    const myJson = await response.json(); //extract JSON from the http response
    console.log(myJson);
    dataUsers = myJson['data']
    //console.log(dataUsers);
  }

//executer recuperation des utilisateurs
getAllUtilisateurs();

//fonction pour recharger le table listant les utilisateurs lorsque dataUsers est positionné
function drawTableDonnees() {
    //recuperer la div a utiliser et commencer par vider la div
    divTab = document.getElementById('tableDonnees')
    divTab.innerHTML = ''; 

    //mettre l entete du tableau
    htmlTable = '';
    htmlTable += '<table class="table table-striped"><thead><tr><th scope="col-1">#</th><th scope="col-4">Nom et prenom</th><th scope="col-1">Sexe</th>';
    htmlTable += '<th scope="col-2">Login</th><th scope="col-1">Téléphone</th></tr></thead><tbody>';

    //boucler pour afficher chaque utilisateur dans dataUsers
    i = 1;
    dataUsers.forEach(function(utilisateur) {
        htmlTable += '<tr>'
        htmlTable += '<th scope="row">'+i+'</th>';
        htmlTable += '<td>'+utilisateur['nom']+' '+utilisateur['prenom']+'</td>';
        htmlTable += '<td>'+utilisateur['sexe']+'</td>';
        htmlTable += '<td>'+utilisateur['login']+'</td>';
        htmlTable += '<td>'+utilisateur['telephone']+'</td>';
        htmlTable += '</tr>'
        i++;
    }); 
    divTab.innerHTML += htmlTable

    //fermer le tableau
    divTab.innerHTML += '</tbody>';
    divTab.innerHTML += '</table>';
}

//fonction drawTableDonnes avec attente de chargement iniital a partir du serveur distant
drawTableDonneesSync = async () => {
    //faire l appel asynchrone permettant de charger les donnees
    await getAllUtilisateurs();
    //afficher
    drawTableDonnees();
}

//fonction de filtrage des données en fonction de ce qui est ecrit
filtrage = async () => {
    //recuperer la chaine de filtrage
    strFiltre = document.getElementById('filtre').value;

    //faire l appel asynchrone permettant de charger les donnees
    await getAllUtilisateurs();

    //ajouter dans dataUserFiltrees tout ce qui match quelque part
    dataUserFiltrees = [];
    dataUsers.forEach(function(utilisateur) {
        if ( utilisateur['nom'].toLowerCase().includes(strFiltre.toLowerCase()) || 
            utilisateur['prenom'].toLowerCase().includes(strFiltre.toLowerCase()) ) {
                dataUserFiltrees.push(utilisateur);
        }
    }); 
    dataUsers = dataUserFiltrees; //replacer dataUsers par sa nouvelle version 

    //afficher
    drawTableDonnees();
}




