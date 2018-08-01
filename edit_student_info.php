<!DOCTYPE html>
<html>
<head>
    <title>ErasmusConnect</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<!--JQuery library-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/apiFunctions.js"></script>

<div class="login-block">
    <div class="inner-login-block-edit-info">
        <h2>Erasmus Connect</h2>
        <form action="/backend/edit_user_action.php" method="post">
            <h4>Where are you from?</h4>
            <select class="search-students-input" id="countries-dropdown" name="edit_country" id="country">
                <option value="">Choose a country...</option>
                <!--Get list of countries-->
            </select>
            <h4>Where will you study during erasmus?</h4>
            <select class="search-students-input" name="edit_city" id="cities-dropdown">
                <option value="">Choose a city...</option>
                <!--Get list of countries-->
            </select>
            <input type="submit" id="submit-edit-info-form">
        </form>
    </div>
</div>
</div>

<script>
    getCountriesList();
    getAllCitiesList();
</script>

</body>
</html>