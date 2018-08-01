window.fbAsyncInit = function() {
    FB.init({
        appId      : '1722990901149427',
        cookie     : true,
        xfbml      : true,
        version    : 'v3.0'
    });

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

};