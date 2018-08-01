<?php

    //Defines format of response
    header('Content-Type: text/json');

    //Connects to database
    require_once "../database/connection.php";

    //Defines action to be done
    $action = $_POST['action'];
    $city_search = $_POST['city_search'];

    //Query that will be sent to mySQL database
    $query_string = "";

    switch($action){
        case "search_countries":
            searchCountries();
        break;
        case "get_all_cities":
            getAllCities();
        break;
        case "get_cities":
            getCities();
        break;
    }

    //Returns list of different countries in database
//Function works
function searchCountries(){
    $query_string = 'SELECT DISTINCT Country FROM cities';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    //Execute query
    $result = $mysqli->query($query_string);

    //Creates empty array to store response
    $countries = array();

    //Adds every different country to the response array
    foreach( $result as $row){
        array_push($countries, $row['Country']);
    }

    //Sends response to the client
    echo json_encode($countries);
}

//Returns list of different cities in database
//Function works
function getAllCities(){
    $query_string = 'SELECT DISTINCT city FROM erasmus_location';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    //Execute query
    $result = $mysqli->query($query_string);

    //Creates empty array to store response
    $cities = array();

    //Adds every different country to the response array
    foreach( $result as $row){
        array_push($cities, $row['city']);
    }

    //Sends response to the client
    echo json_encode($cities);
}

    //Return list of cities in database that match the selected country
    function getCities(){
        $query_string = 'SELECT City FROM cities WHERE Country LIKE %$city_search%';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        //Execute query
        $result = $mysqli->query($query_string);

        //Creates empty array to store response
        $cities = array();

        //Adds every different country to the response array
        foreach( $result as $row){
            array_push($cities, $row['Country']);
        }

        //Sends response to the client
        echo json_encode($cities);
    }

?>