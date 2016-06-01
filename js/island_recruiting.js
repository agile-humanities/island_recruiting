
(function ($) {
    Drupal.behaviors.island_recruiting = {
        'attach': function (context) {
            $('#ir_email').click(function () {
                console.log("email stuff goes here");
            });
            $('#ir_password').click(function () {
                console.log("password stuff goes here");
            });
            $('#ir_user').click(function () {
                console.log("user stuff goes here");
            });

        }
    };
})(jQuery);