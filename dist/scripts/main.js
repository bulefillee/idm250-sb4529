jQuery(document).ready(function() {
    jQuery('.navTrigger').click(function () {
        jQuery(this).toggleClass('active');
        console.log("Clicked menu");
        jQuery("#mainListDiv").toggleClass("show_list");
        jQuery("#mainListDiv").fadeIn();
    });

    jQuery(window).scroll(function() {
        if (jQuery(document).scrollTop() > 50) {
            jQuery('.nav').addClass('affix');
            console.log("OK");
        } else {
            jQuery('.nav').removeClass('affix');
        }
    });
});
