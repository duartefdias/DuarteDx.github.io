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
    <script type="text/javascript" src="facebookIntegration/include.js"></script>
    <script type="text/javascript" src="facebookIntegration/functions.js"></script>

	<div class="login-block">
        <div class="inner-login-block">
            <h2>Erasmus Connect</h2>
            <p>Login:</p>
            <fb:login-button
                    scope="public_profile,email"
                    onlogin="checkLoginState();"
                    class="facebook-button"
                    data-max-rows="1"
                    data-size="large"
                    data-button-type="continue_with"
                    data-show-faces="false"
                    data-auto-logout-link="false"
                    data-use-continue-as="true">
            </fb:login-button>
        </div>
    </div>

    <button onclick="testAPI()">Test API</button>

</body>
</html>