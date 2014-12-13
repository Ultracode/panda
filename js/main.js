var main = {
    init: function(){
        $('.x-mas-form').submit(function(e) {
            e.preventDefault();
            return false;
        });
        //func to bind object ids to hidden field
        $('.x-box-block a').click(function(e) {
            e.preventDefault();
            $('.x-box-block a').removeClass('selected');
            $(this).addClass('selected');
            var item = $(this).attr('rel');
            $('#food-id').val(item);
        });
        $('.x-box-block-toy a').click(function(e) {
            e.preventDefault();
            $('.x-box-block-toy a').removeClass('selected');
            $(this).addClass('selected');
            var item = $(this).attr('rel');
            $('#toy-id').val(item);
        });
        $('.submit-button').click(function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            if(!main.validateForm(id)) {
                alert('You must select an item and fill in the details to make a donation.');
                return false;
            }
            $(this).css('opacity', 0.7);
            // $(this).unbind();
            main.login(id);
        });
        $('.share-button').click(function(e) {
            e.preventDefault();
            main.share();
        });
    },
    login: function(target) {
        $.get('/user/loggedIn', function(loggedIn) {
            if(loggedIn == 1) {
                //submit donation to DB
                main.addDonation(target);
            }
            else {
                FB.login(function(response) {
                    //handle the response
                    if (response.status === 'connected') {
                        FB.api('/me', function(resp) {
                            var data = JSON.stringify(resp);
                            $.post('/user/login', resp, function(res) {
                                //Handle response
                                //submit donation to DB
                                if(res == 'success') {
                                    main.addDonation(target);
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
            }
        });
    },
    addDonation: function(target) {
        var type = target.replace('give-', '');
        var object = $('#'+type+'-id').val();
        var name = $('#'+type+'-name').val();
        var msg = $('#'+type+'-msg').val();
        //AJAX call here
        $.post('/user/donate', {type: type, object: object, name: name, message: msg}, function(data) {
            //post donation tasks
            if(data == 1) {
                //Success
                alert('Thank You for your donation.');
            }
            else if(data == 2) {
                //Already made donation
                alert('Thank You, but you can donate only one item.');
            }
            var value = $('#donation-made').val();
            value = parseInt(value) + 1;
            $('#donation-made').val(value);
            if(value == 2) {
                $(window).unbind();
                $('.hide_overlay').show();
                main.bindHover();
            }
        });
    },
    bindHover: function() {
        //on hover functions to display count
        // alert('successful');
        $('.food-pot img').hover(function() {
            // alert('item');
            var id = $(this).attr('id');
            var rel = $(this).attr('rel');
            var type = 'food';

            $(this).tooltipster({
                content: 'Loading...',
                contentAsHTML: true,
                interactive: true,
                functionBefore: function(origin, continueTooltip) {

                    continueTooltip();
                    // next, we want to check if our data has already been cached
                        $.post('/user/donation-count', {type: type, object: rel, name: id}, function(data) {
                                // update our tooltip content with our returned data and cache it
                                origin.tooltipster('content', data).data('ajax', 'cached');
                            // }
                        });
                }
            });
        });
    },
    share: function() {
        FB.login(function(){
            //Method 1
            /*FB.api('/me/feed', 'post', {message: 'Hey Guys, I just donated stuff on FoodPanda! You can do it too.'}, function(response) {
                console.log(response);
            });*/

            //Method 2
            FB.ui({
                method: 'share',
                message: 'Hey Guys, I just donated stuff on FoodPanda! ',   
                href: 'http://www.panda.com',
            }, function(response){});

            //Method 3
            var obj = {
                method: 'feed',
                link: 'http://{{ baseUrl }}',
                picture: 'http://{{ baseUrl }}',
                name: 'Check out www.foodpanda.com',
                caption: 'Foodpanda',
                description: ''
            };
            FB.ui(obj, function(response) {})
        }, {scope: 'publish_actions'});
    },
    validateForm: function(id) {
        var type = id.replace('give-', '');
        var object = $('#'+type+'-id').val();
        var name = $('#'+type+'-name').val();
        var msg = $('#'+type+'-msg').val();
        if(object == '' || object == undefined ||
            name == '' || name == undefined ||
            msg == '' || msg == undefined) {
            return false;
        }
        else {
            return true;
        }
    }
};

$(function() {
    main.init();
});