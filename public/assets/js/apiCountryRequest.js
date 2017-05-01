// fonction custom pour trier les pays par continent
// prend en paramètre un tableau
var sortByRegion = function(arr)
{
    // pour chaque continent création d'un objet
    // contient le nom du continent et un tableau vide pour les pays
    var asia = 
    {
        "continent": "Asia",
        "countries": []
    }
    
    var europe = 
    {
        "continent": "Europe",
        "countries": []
    }
    
    var africa = 
    {
        "continent": "Africa",
        "countries": []
    }
    
    var americas = 
    {
        "continent": "Americas",
        "countries": []
    }
    
    var polar = 
    {
        "continent": "Polar",
        "countries": []
    }
    
    var oceania = 
    {
        "continent": "Oceania",
        "countries": []
    }
    
    // parcourt du tableau de données
    for (var i=0; i<arr.length; i++)
    {
        // si correspondance avec une des régions
        // on push le pays dans le tableau correspondant
        switch(arr[i].region)
        {
            case "Asia":
                asia.countries.push(arr[i].name);
                break;
                
            case "Europe":
                europe.countries.push(arr[i].name);
                break;
                
            case "Africa":
                africa.countries.push(arr[i].name);
                break;
                
            case "Americas":
                americas.countries.push(arr[i].name);
                break;
                
            case "Polar":
                polar.countries.push(arr[i].name);
                break;
                
            case "Oceania":
                oceania.countries.push(arr[i].name);
                break;
        }
    }
    
    // tri du tableau final des pays par nom
    asia.countries.sort();
    europe.countries.sort();
    africa.countries.sort();
    americas.countries.sort();
    polar.countries.sort();
    oceania.countries.sort();
    
    // création tableau de réponse
    var res =[];
    
    // push de tous les objets continent dans le tableau réponse
    res.push(asia);
    res.push(europe);
    res.push(africa);
    res.push(americas);
    res.push(polar);
    res.push(oceania);
    
    // return du tableau de réponse
    return res;
}

    // requête ajax
$.ajax ({
    method: 'GET',
    url: 'https://restcountries.eu/rest/v1/all'
}).done(function(data){
    console.log(data);
    var countries = sortByRegion(data);
    console.log(countries);
    var listRegion;
    
    // parcours tableau par continent
    countries.forEach(function(region){
        listRegion+='<optgroup label="'+region.continent+'">';
        
        // percours tableau par pays
        region.countries.forEach(function(country){
            listRegion+= '<option value="'+country+'">'+country+'</option>';
        });
        listRegion+='</optgroup>';
    });
    $('#country').append(listRegion);
})

