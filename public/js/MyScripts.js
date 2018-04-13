function showReplies(tag) {
    var tag = $(tag);
    var parentP= tag.parent('p');
    parentP.next().fadeToggle();
}

$('.Red > a').hover(function () {
   $('.Red >a > ul').show();
},function () {
    $('.Red >a > ul').hide();
});

// var menu=$('.myNav .root > li> span');
// menu.hover(function () {
//
//     $('span', this).removeClass('fa-angle-down');
//     $('span', this).addClass('fa-angle-up');
// }, function () {
//
//     $('span', this).removeClass('fa-angle-up');
//     $('span', this).addClass('fa-angle-down');
//
//
// });


//
// menu.click(function () {
//     $('.myNav .root > li .level').each(function () {
//        $(this).fadeToggle();
//     });
//    submenu.removeClass('fa-angel-down');
//    submenu.addClass('fa-angel-up');
//
//
// });

function menuDown(tag) {
    var tag = $(tag);
    tag.next().fadeToggle();
}

