jQuery(function() {
    // var navigation
    var navicon = jQuery('#nav-icon');
    var menublock = jQuery('#menu-block');
    var dropdwown = jQuery('.dropdown-container');
    var blockmain = jQuery('.block-main');
    var closeblock = jQuery('.block-main, .close-menu-block');
    var navdefault = jQuery( '.navbar-default-white' );
    var initmenu = jQuery('.init-menu');
    var Slink = jQuery('.scroll-link');

    // section navigation
    var sections = jQuery('section')
    , nav = jQuery('nav')
    , nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
    var top = $(this).offset().top - nav_height-10,
        bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('actived');
      sections.removeClass('actived');
      
      $(this).addClass('actived');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('actived');
    }
    });
    });

    nav.find('a').on('click', function () {
    var $el = $(this)
    , id = $el.attr('href');

    $('html, body').animate({
    scrollTop: $(id).offset().top - nav_height
    }, 900);

    return false;
    });

    // full block menu
    navicon.on("click", function(e) {
    menublock.toggle('slide', {
            direction: 'right'
        }, 600);
    blockmain.fadeToggle(300);
    initmenu.each(function(i){
        var t = $(this);
        setTimeout(function(){ 
    t.toggleClass('show-menu'); 
    }, (i+1) * 150);
      });
    });

    // block-main close block menu
    closeblock.on("click", function(e) {
    blockmain.fadeToggle(300);
    menublock.toggle('slide', {
            direction: 'right'
        }, 600);
    initmenu.each(function(i){
        var t = $(this);
        setTimeout(function(){ 
    t.toggleClass('show-menu'); 
    }, (i+1) * 150);
      });
    });

    //dropdown
    jQuery('.dropdown').each(function() {
     var $dropdown = $(this);
     jQuery("a.dropdown-link", $dropdown).on('click', function(e) {
      e.preventDefault();
      var $div = jQuery(".dropdown-container", $dropdown);
      $div.slideToggle('fast');
      dropdwown.not($div).slideUp('fast');
      return false;
    });
    });

    jQuery('html').on("click", function(e) {
    dropdwown.slideUp('fast');
    });


    // click scroll navigation block menu
    Slink.on('click', function(e) {
    blockmain.fadeOut(300);
    menublock.hide('slide',{direction:'right'},600);
    initmenu.each(function(i){
        var t = $(this);
        setTimeout(function(){ 
    t.removeClass('show-menu'); 
    }, (i+1) * 150);
      });							 
    var id = $(this).attr('href');
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    e.preventDefault();
    var offSet = 0;
    var targetOffset = $(id).offset().top - offSet;
    bodyScroll.animate({ scrollTop: targetOffset }, 800);
    });

});