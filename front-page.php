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
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 8,
);

$loop = new WP_Query($args);
if ($loop->have_posts()) :

?>

    <section class="popular-courses">
        <div class="container">
            <h2><?php _e('Our Most Popular Courses', 'educrat'); ?></h2>
            <p>10,000+ unique online course list designs</p>
            <a href="#" class="button-to-courses"><?php _e('All Courses', 'educrat'); ?></a>
            <div class="owl-carousel owl-theme courses-slider">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="owl-item">
                        <?php
                        // Product meta
                        $_product = wc_get_product(get_the_ID());
                        $regular_price = $_product->get_regular_price();
                        $sale_price = $_product->get_sale_price();
                        $price = $_product->get_price();
                        // Author meta
                        $author_id = get_post_field('post_author', get_the_ID());
                        $author_name = get_the_author_meta('first_name', $author_id);
                        $last_name = get_the_author_meta('last_name', $author_id);
                        if ($last_name) {
                            $author_name .= ' ' . $last_name;
                        }
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if (!$image) {
                            $image = get_stylesheet_directory_uri() . '/assets/img/default-product.png';
                        }
                        ?>
                        <div class="product-card">
                            <a href="<?php the_permalink(); ?>" class="image-container">
                                <div class="hover-mask"></div>
                                <img src="<?= $image ?>" alt="">
                            </a>
                            <div class="product-info">
                                <div class="stars"></div>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="status"></div>
                                <div class="info">
                                    <div class="author"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/default_user.png'; ?>" alt=""><?= $author_name ?></div>
                                    <div class="price">
                                        <?php if ($sale_price == '') { ?>
                                            $<?= $price ?>
                                        <?php } else { ?>
                                            <span>$<?= $regular_price ?></span> $<?= $sale_price ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="how-it-works">
    <div class="container">
        <div class="first-block">
            <h2><?php _e('How it <span>Works</span>', 'educrat'); ?></h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
            <ul>
                <li>
                    <img src="" alt="">
                    <div class="info">
                        <h4>Create Account</h4>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries</p>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="info">
                        <h4>Create Account</h4>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries</p>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="info">
                        <h4>Create Account</h4>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="second-block">
            <div class="round-element1"></div>
            <div class="round-element2"></div>
            <div class="item1">
                <h5>3.000 +</h5>
                <p>Free Courses</p>
            </div>
            <div class="item2">
                <h5>Congrats!</h5>
                <p>Your Admission Completed</p>
            </div>
            <div class="item3">
                <img src="" alt="">
                <div class="info">
                    <h5>Ali Tufan</h5>
                    <p>UX/UI Designer</p>
                    <div class="hearts"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="journey">
    <div class="container">
        <h2><?php _e('Start your Learning Journey Today!', 'educrat'); ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur.</p>
        <div class="journey-blocks">
            <div class="jblock">
                <img src="" alt="">
                <h4>Learn with Experts</h4>
                <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
            </div>
            <div class="jblock">
                <img src="" alt="">
                <h4>Learn with Experts</h4>
                <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
            </div>
            <div class="jblock">
                <img src="" alt="">
                <h4>Learn with Experts</h4>
                <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
            </div>
            <div class="jblock">
                <img src="" alt="">
                <h4>Learn with Experts</h4>
                <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
            </div>
        </div>
    </div>
</section>

<section class="top-categories">
    <div class="container">
        <h2 class="text-center"><?php _e('Top Categories', 'educrat'); ?></h2>
        <p class="text-center"><?php _e('10,000+ unique online course list designs', 'educrat'); ?></p>
        <div class="categories-wrapper">
            <div class="cat-block">
                <h4>Creative</h4>
                <ul>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                </ul>
                <a href="#" class="more"><?php _e('More', 'educrat'); ?></a>
            </div>
            <div class="cat-block">
                <h4>Creative</h4>
                <ul>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                </ul>
                <a href="#" class="more"><?php _e('More', 'educrat'); ?></a>
            </div>
            <div class="cat-block">
                <h4>Creative</h4>
                <ul>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                </ul>
                <a href="#" class="more"><?php _e('More', 'educrat'); ?></a>
            </div>
            <div class="cat-block">
                <h4>Creative</h4>
                <ul>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                </ul>
                <a href="#" class="more"><?php _e('More', 'educrat'); ?></a>
            </div>
            <div class="cat-block">
                <h4>Creative</h4>
                <ul>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                    <li>
                        <a href="#">Graphic Design</a>
                    </li>
                </ul>
                <a href="#" class="more"><?php _e('More', 'educrat'); ?></a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
