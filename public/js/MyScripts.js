// function showReplies(tag) {
//     var tag = $(tag);
//     var parentP = tag.parent('p');
//     parentP.next().fadeToggle();
// }

$('.Red > a').hover(function () {
    $('.Red >a > ul').show();
}, function () {
    $('.Red >a > ul').hide();
});
$('.collapse-footer > img').click(function () {
    $(this).toggleClass('open');
    if($(this).hasClass('open')){
        $(this).attr('src',"images/navigate-up (3).png");
    }else{
        $(this).attr('src',"images/navigate-down (1).png");
    }
    var parentDiv=$(this).parent('div');
    parentDiv.next().fadeToggle();
});
// function menuDown(tag) {
//     var tag = $(tag);
//     var parentDiv = tag.parent('div');
//     parentDiv.next().fadeToggle();
//
// }

