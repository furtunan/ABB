jQuery(function() {
    jQuery('#navBarNavToggle').on('click', function() {
        jQuery('.nav-bar--navigation').toggleClass('open');
        jQuery(this).children('i').toggleClass('glyphicon-menu-hamburger');
        jQuery(this).children('i').toggleClass('glyphicon-remove');
    });

    jQuery('.menu-item-has-children').on('click', function() {
        jQuery(this).find('.sub-menu').toggleClass('submenu-open');
        jQuery(this).find('i').toggleClass('glyphicon-menu-down');
        jQuery(this).find('i').toggleClass('glyphicon-menu-up');
    });
});