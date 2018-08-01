<!DOCTYPE html>
<html>
<head>
    <title>ErasmusConnect</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/world.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!--JQuery library-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/apiFunctions.js"></script>

    <!--Connect to database-->
    <?php include_once "database/connection.php" ?>

    <!--FACEBOOK FUNCTION-->
    <script type="text/javascript" src="facebookIntegration/include.js"></script>
    <script type="text/javascript" src="facebookIntegration/functions.js"></script>

    <!--ADD NAVBAR TO WEBPAGE-->
    <?php include_once "navbar/navbar.php" ?>

    <!--<button onclick="testAPI()">Test API</button>-->

    <!--WORLD GLOBE ANIMATION STUFF-->
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/queue.v1.min.js"></script>
    <script src="http://d3js.org/topojson.v0.min.js"></script>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    
    <!--Renders the globe with points defined by "../places.json"-->
    <script src="/js/renderWorld.js"></script>

    <?php session_start();?>
    <?php
        session_start();
        //echo('php session username: ');
        //echo($_SESSION['user_name']);
    ?>

    <form class="search-students" action="/students_list.php" method="post">
        <h2 class="search-students-title">Students search</h2>
        <!--<select class="search-students-input" id="countries-dropdown" name="country" id="country">
            <option value="">Choose a country...</option>-->
            <!--Get list of countries-->
        <!--</select>-->
        <select class="search-students-input" name="city" id="cities-dropdown">
            <option value="">Choose a city...</option>
            <!--Get list of cities-->
        </select>
        <input class="search-students-input search-students-submit" type="submit" name="searchPeople" value="Search students">
    </form>

    <script>
        //getCountriesList();
        getAllCitiesList()
    </script>

</body>
</html>
