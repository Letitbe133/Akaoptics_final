/*
*
*	AKA Optics Website
*	- MAIN.JS -
*	By: Chloé Carpentier, Lionel Lafont, Leonardo Balland, Kevin Silvert;
*	Created at: 10/12/2016
* 	Description: This file will be controlling the entire front-end Javascript
*/

// Only when document is ready
$(document).ready(function(){
/*
//Créer une function custom pour trier les pays qui prend en paramètre un tableau de données
var sortByRegion = function (arr) {
    
    //Créer pour chaque continent un objet, qui contient le nom du continent un tableau des pays vide
    var asia = {
        "continent" : "Asia",
        "countries" : []
    }
    var europe = {
        "continent" : "Europe",
        "countries" : []
    }
    var africa = {
        "continent" : "Africa",
        "countries" : []
    }
    var americas = {
        "continent" : "Americas",
        "countries" : []
    }
    var polar = {
        "continent" : "Polar",
        "countries" : []
    }
    var oceania = {
        "continent" : "Oceania",
        "countries" : []
    }
        
    //On parcoure le tableau de données
    for (var i=0; i<arr.length; i++) {
        
        //Si correspondance avec une des région, on push le pays dans le tableau qui va bien
        if (arr[i].region === "Asia") {
            asia.countries.push(arr[i].name)
        }
        
        if (arr[i].region === "Europe") {
            europe.countries.push(arr[i].name)
        }
        
        if (arr[i].region === "Africa") {
            africa.countries.push(arr[i].name)
        }
        
        if (arr[i].region === "Americas") {
            americas.countries.push(arr[i].name)
        }
        
        if (arr[i].region === "Polar") {
            polar.countries.push(arr[i].name)
        }
        
        if (arr[i].region === "Oceania") {
            oceania.countries.push(arr[i].name)
        }
        
    }
    
    // On trie le tableau final des pays par nom
    asia.countries.sort()
    europe.countries.sort()
    africa.countries.sort()
    americas.countries.sort()
    polar.countries.sort()
    oceania.countries.sort()
    
    // On initialise un tableau de réponse
    var res = []
    
    //On push tous les objets continents dans le tableau de réponse
    res.push(asia)
    res.push(europe)
    res.push(oceania)
    res.push(polar)
    res.push(africa)
    res.push(americas)
    
    //On retourne le tableau de réponse
    return res;
}


<<<<<<< HEAD
// recuperer la liste
// trier les regions 
// afficher les régions
$.ajax({
    method: 'GET',
    url: 'https://restcountries.eu/rest/v1/all'
}).done(function (data) {
    
    var res = sortByRegion(data)
    console.log(res)
    
}).fail(function (jqXHR) {
    
    console.log(jqXHR.responseText)
    
})
*/

//END DOCUMENT READY
});
