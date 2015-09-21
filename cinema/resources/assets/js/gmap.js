var latlng = new google.maps.LatLng(45.75722,  4.89888);
var latlng2 = new google.maps.LatLng(48.85661,  2.35222);

var options = {
    center: latlng,
    zoom: 5,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};


//carte se créer et stocker dans la variable carte
var carte = new google.maps.Map(document.getElementById("map"), options);



//création du marqueur
var marqueur = new google.maps.Marker({
    position: latlng,
    map: carte,
});

var marqueur2 = new google.maps.Marker({
    position: latlng2,
    map: carte,
});


var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">UGC Lyon <i>(69002)</i></h1>'+
    '<h4>3 films actuellements en salle</h4>' +
    '<div id="bodyContent">'+
    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
    '<p>L’<b>Union générale cinématographique</b> (ou <b>UGC</b>) est l’un des plus importants groupes <a href="/wiki/Europe" title="Europe">européens</a> d’<a href="/wiki/Exploitation_cin%C3%A9matographique" title="Exploitation cinématographique">exploitation cinématographique</a>, et le <abbr class="abbr" title="Deuxième">2<sup>e</sup></abbr> en France. C’est aussi un acteur majeur dans les domaines de la <a href="/wiki/Producteur_de_cin%C3%A9ma" title="Producteur de cinéma">production</a>, de la <a href="/wiki/Distribution_de_films" title="Distribution de films">distribution</a> et du négoce de droits audiovisuels. Son président est <a href="/wiki/Guy_Verrecchia" title="Guy Verrecchia">Guy Verrecchia</a>.</p>'+
    '</div>'+
    '</div>';

//créer une window
var infowindow = new google.maps.InfoWindow({
    content: contentString //contenu de la fenetre
});

//jecoute le clique du marqueur
marqueur.addListener('click', function() {
    //ma windows s'ouvre sur ma carte et plus précisement sur mon marqueur
    infowindow.open(carte, marqueur);
});


//geocoder une adresse
//var address = "27 lotissement pascal 34570 Montarnaud";
//geocoder.geocode({'address': address}, function(results, status) {
//    if (status === google.maps.GeocoderStatus.OK) {
//
//        //je modifie son centre
//        carte.setCenter(results[0].geometry.location);
//
//        //creation du marqueur
//        var marker = new google.maps.Marker({
//            map: carte,
//            position: results[0].geometry.location
//        });
//
//    } else {
//        alert('Geocode was not successful for the following reason: ' + status);
//    }
//});


/****************Nouveau code****************/

// To add the marker to the map, call setMap();
//marker.setMap(map);

    //ne pas oublier de rendre le marqueur "déplaçable"
//marqueur.setDraggable(true);




//google.maps.event.addListener(marqueur, 'dragend', function(event) {
//    //message d'alerte affichant la nouvelle position du marqueur
//    //alert("La nouvelle coordonnée du marqueur est : "+event.latLng);
//});
