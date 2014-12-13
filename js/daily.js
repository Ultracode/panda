var daily = {
    init: function() {
        $('#fb-login').click(function() {
            FB.login(function(response) {
                //handle the response
                if (response.status === 'connected') {
                    FB.api('/me', function(resp) {
                        var data = JSON.stringify(resp);
                        $.post('/user/login', resp, function(res) {
                            //Handle response
                            //submit donation to DB
                            if(res == 'success') {
                                window.location.reload();
                            }
                        });
                    });
                }
                else if (response.status === 'not_authorized') {
                    console.log('not Authorized');
                }
                else {
                    console.log('Nothing happened');
                }
            }, {scope: 'public_profile,email'});
        });

        $('.facebook-share a').click(function(e) {
            e.preventDefault();
            var url = window.location.host;
            var img = $('.lightup img').attr('src');
            FB.login(function(){
                var obj = {
                method: 'feed',
                link: 'http://'+url,
                picture: 'http://'+url+img,
                name: ' Celebrate Christmas with foodpanda by joining our 12 Days of Giving! Win, Give and help donate great prizes every day! for the next 12 days!',
                caption: 'Foodpanda',
                description: ''
            };
            FB.ui(obj, function(response) {})

            }, {scope: 'publish_actions'});
        });
    }
};

daily.init();