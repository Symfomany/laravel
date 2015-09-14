var latlng = new google.maps.LatLng(45.75722,  4.89888);

var options = {
    center: latlng,
    zoom: 19,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};


//carte se créer et stocker dans la variable carte
var carte = new google.maps.Map(document.getElementById("map"), options);



//création du marqueur
var marqueur = new google.maps.Marker({
    position: latlng,
    map: carte,
});

var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">3WA</h1>'+
    '<div id="bodyContent">'+
    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
    'sandstone rock formation in the southern part of the '+
    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
    'south west of the nearest large town, Alice Springs; 450&#160;km '+
    '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
    'features of the Uluru - Kata Tjuta National Park. Uluru is '+
    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
    'Aboriginal people of the area. It has many springs, waterholes, '+
    'rock caves and ancient paintings. Uluru is listed as a World '+
    'Heritage Site.</p>'+
    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
    'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
    '(last visited June 22, 2009).</p>'+
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
var address = "27 lotissement pascal 34570 Montarnaud";
geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {

        //je modifie son centre
        carte.setCenter(results[0].geometry.location);

        //creation du marqueur
        var marker = new google.maps.Marker({
            map: carte,
            position: results[0].geometry.location
        });

    } else {
        alert('Geocode was not successful for the following reason: ' + status);
    }
});


/****************Nouveau code****************/

// To add the marker to the map, call setMap();
//marker.setMap(map);

    //ne pas oublier de rendre le marqueur "déplaçable"
//marqueur.setDraggable(true);




//google.maps.event.addListener(marqueur, 'dragend', function(event) {
//    //message d'alerte affichant la nouvelle position du marqueur
//    //alert("La nouvelle coordonnée du marqueur est : "+event.latLng);
//});

//# sourceMappingURL=gmap.js.map