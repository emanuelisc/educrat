// jQuery(function() {
//     var current = location.pathname;
//     jQuery('.top-menu li a').each(function() {
//         var $this = jQuery(this);
//         // if the current path is like this link, make it active
//         if ($this.attr('href').indexOf(current) !== -1) {
//             $this.addClass('active');
//         }
//     })
// })

// jQuery(document).ready(function() {



// });


jQuery(".hamburger").click(function() {
    if (jQuery(this).hasClass('active')) {
        jQuery(this).removeClass('active');
        jQuery(".mobile-pop").removeClass('active');
        jQuery("body").removeClass('active-ham');
    } else {
        jQuery(this).addClass('active');
        jQuery(".mobile-pop").addClass('active');
        jQuery("body").addClass('active-ham');
    }
});

jQuery("ul.pop-menu li a").click(function() {
    jQuery(".hamburger").removeClass('active');
    jQuery(".mobile-pop").removeClass('active');
    jQuery("body").removeClass('active-ham');
});


 jQuery('.module-video-popup .popup-content .bg-curtain').click(function(){
    if(jQuery('.module-video-popup').hasClass('active')){
        jQuery('.module-video-popup').removeClass('active');
        stopVideo();
    }
 });

 jQuery('.module-video-popup .popup-content .close-container').click(function(){
    if(jQuery('.module-video-popup').hasClass('active')){
        jQuery('.module-video-popup').removeClass('active');
        stopVideo();
    }
 });
 
 jQuery('#youtube-popup').click(function(){
    if(!jQuery('.module-video-popup').hasClass('active')){
        jQuery('.module-video-popup').addClass('active');
        startVideo();
    }
 });

