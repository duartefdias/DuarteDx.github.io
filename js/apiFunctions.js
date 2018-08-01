serverURL = "/backend/api.php";

//Fills the country selection dropdown with the available countries
function getCountriesList(){

    var request = $.ajax({
        url: serverURL,
        type: "POST",
        data: {"action" : "search_countries"},
        dataType: "json",
    });

    request.done(function(data) {
        console.log("REQUEST.DONE: " + data);
        var countriesDropdown = document.getElementById("countries-dropdown");
        for(index in data) {
            countriesDropdown.options[countriesDropdown.options.length] = new Option(data[index], data[index]);
        }
    });

    request.fail(
        function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });
}

//Fills the country selection dropdown with the available countries
function getAllCitiesList(){

    var request = $.ajax({
        url: serverURL,
        type: "POST",
        data: {"action" : "get_all_cities"},
        dataType: "json",
    });

    request.done(function(data) {
        console.log("REQUEST.DONE: " + data);
        var citiesDropdown = document.getElementById("cities-dropdown");
        for(index in data) {
            citiesDropdown.options[citiesDropdown.options.length] = new Option(data[index], data[index]);
        }
    });

    request.fail(
        function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });
}

//Fills the country selection dropdown with the available cities based on the chosen country
function getCitiesList(){

    var selectedCountry = $("#countries-dropdown");
    var citiesList = $("cities-dropdown");

    //Missing code here
    //View bookmarked tab on dependent dropdowns

    var request = $.ajax({
        url: serverURL,
        type: "POST",
        data: {"action" : "search_cities", "country" : selectedCountry},
        dataType: "json",
    });

    request.done(function(data) {
        console.log("REQUEST.DONE: " + data);
        var citiesDropdown = document.getElementById("#cities-dropdown");
        for(index in data) {
            citiesDropdown.options[citiesDropdown.options.length] = new Option(data[index], index);
        }
    });

    request.fail(
        function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });
}

