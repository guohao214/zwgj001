var $menu = $('.header').find('.mainmenu');
$menu.hover(function(){
    if( !$(this).hasClass('open') ) {
        $(this).addClass('open');
    }
},function(){
    $(this).removeClass('open');
});


