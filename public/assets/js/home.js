$('.carousel.carousel-slider').carousel();


function display ()
{
    // récupérer l'event actif
    var eventActive = $('#events ul li.activeEvent');

    // enlever la classe .active
    eventActive.removeClass("activeEvent");

    // afficher l'event suivant
    eventSuivant = eventActive.next();

    // si plus d'events on boucle
    if(eventSuivant.length > 0)
    {
        eventSuivant.addClass("activeEvent");
    }
    else
    {
        eventActive.removeClass('activeEvent');
        $("#events ul li:first").addClass("activeEvent");
    }
}

var eventFirst = $('#events ul li:first');

// Fonction de slide-in des events désactivée à la demande du client
// décommenter les lignes suivantes pour réactiver

// ajout de la classe .active au premier event
// $(eventFirst).addClass("activeEvent");

// Affichage du slider, délai 10s
// setInterval(display, 10000);
