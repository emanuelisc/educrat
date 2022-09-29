<?php
get_header();
?>

<section class="video1">
    <div id="video-viewport">
        <a id="youtube-popup" class="btn-video"></a>
        <video autoplay="" muted="" loop="" playsinline="">
            <source src="<?= get_stylesheet_directory_uri(); ?>/assets/video/1_v2.mp4" type="video/mp4">
        </video>
    </div>
</section>

<div class="module-video-popup">
    <div class="popup-content">
        <div class="bg-curtain"></div>
        <div id="player"></div>
        <!-- <iframe width="1904" height="741" src="https://www.youtube.com/embed/HwxFt0AkUw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         -->
        <div class="close-container custom-cursor">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>
    </div>
</div>

<script>
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '741',
            width: '640',
            videoId: '<?php the_field('popup_youtube_video'); ?>',
            playerVars: {
                'playsinline': 1
            },
            events: {
                //   'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    function startVideo() {
        player.playVideo();
    }

    var done = false;

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 60000);
            done = true;
        }
    }

    function stopVideo() {
        player.stopVideo();
    }
</script>


<?php
get_footer();
