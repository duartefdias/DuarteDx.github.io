(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function statusChangeCallback(response){
    if(response.status === 'connected'){
        console.log('Logged in and authenticated');
        FB.api('/me?fields=name,email', function(response){
            if(response && !response.error){
                console.log(response);
                loginToApp(response.id, response.name);
                /*if(loginToApp(response.id, response.name) == 'user_added_to_DB'){
                    document.location.href = "/edit_student_info.php";
                }
                else{
                    if(document.location.href != "http://localhost/main.php"){
                        document.location.href = "/main.php";
                    }
                }*/
            }
            else {
                console.log("Error in sending login information to server")
            }
        })
    } else {
        console.log('Not authenticated');
    }
}

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

function logout() {
    FB.logout(function(response){
        console.log("User has logged out");
        document.location.href = "/index.php";
    });
}

function testAPI(){
    FB.api('/me?fields=name,email', function(response){
        if(response && !response.error){
            console.log(response);
        }
    })
}

const loginActionURL = "/backend/login_action.php";

function loginToApp(id, name){

    var request = $.ajax({
        url: loginActionURL,
        type: "POST",
        data: {"user_id" : id, "user_name" : name},
        dataType: "json",
    });

    request.done(function(data) {
        console.log("REQUEST.DONE: " + data);
        if(data == 'user_added_to_DB'){
            document.location.href = "/edit_student_info.php";
        }
        else{
                document.location.href = "/main.php";
        }
    });

    /*request.fail(
        function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });*/
}