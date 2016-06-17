
(function ($) {
    Drupal.behaviors.island_recruiting = {
        'attach': function (context) {
            $('#ir_email').click(function () {
                console.log("email stuff goes here");
            });


        }
    };
})(jQuery);