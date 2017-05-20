var $img = $('.cangku-image > img'),
    $fugai = $('.cangku-info-fugai');
   

$img.hover(function(){
    $fugai = $(this).next('.cangku-info-fugai');
    $fugai.show();
},function(){
    $fugai = $(this).next('.cangku-info-fugai');
    $fugai.hide();
});

$fugai.hover(function(){
     $(this).show();
},function(){
    $(this).hide();
})

