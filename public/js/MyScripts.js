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
var counter=0;
var urls=["images/side_1.jpg","images/side-1.jpg","images/side-2.jpg","images/side-3.jpg"];

function classAnimate() {
    $(".progress")
        .clearQueue()
        .stop()
        .css(
            {width: '0%'}
        )
        .animate({
            width: "100%"
        }, 5500);

}
classAnimate();
$(function() {
    change();
    function change() {
        setTimeout(change,5000);
        $('.ux-realtime-box  img.test').attr('src',urls[counter]);
        classAnimate(5000);
        counter++;
        if(counter==4){ counter=0;}
    }
});

// $(document).ready(function () {
//     // settings
//     var $slider = $('.testimonia'); // class or id of carousel slider
//     var $slide = 'img.tes'; // could also use 'img' if you're not using a ul
//     var $transition_time = 1000; // 1 second
//     var $time_between_slides = 4000; // 4 seconds
//
//     function classAnimate() {
//         $(".progress")
//             .clearQueue()
//             .stop()
//             .css(
//                 {width: '0%'}
//             )
//             .animate({
//                 width: "100%"
//             }, 5500);
//
//     }
//
//     classAnimate();
//
//     function slides() {
//         return $slider.find($slide);
//     }
//
//     //
//     slides().fadeOut();
//
//     // set active classes
//     slides().first().addClass('active');
//     slides().first().fadeIn($transition_time);
//     //
//     // // auto scroll
//     $interval = setInterval(
//         function () {
//             var $i = $slider.find($slide + '.active').index();
//
//             slides().eq($i).removeClass('active');
//             slides().eq($i).fadeOut($transition_time);
//
//             if (slides().length == $i + 1) $i = -1;
//
//             // loop to start
//
//
//             slides().eq($i + 1).fadeIn($transition_time);
//             slides().eq($i + 1).addClass('active');
//
//             classAnimate((slides().length));
//
//         }
//         , $transition_time + $time_between_slides
//     );
//
//
// });