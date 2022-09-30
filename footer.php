<?php //schema_data(); 
$main_page = get_page_by_path('main');
?>

<footer>
    <div class="container">
        <div class="top-footer">
            <div class="first-block">
                <div class="subscribe">
                    <h4><?php _e('Get in touch', 'educrat'); ?></h4>
                    <div class="subscribe-wrapper">
                        <input type="email" name="subscribe_email" placeholder="<?php _e('Your Email', 'educrat'); ?>" id="subscribe_email">
                        <button type="submit" id="subscribe_submit"></button>
                    </div>
                </div>
                <div class="menu-blocks">
                    <div class="menu-block">
                        <h4><?php _e('About', 'educrat'); ?></h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="menu-block">
                        <h4><?php _e('Categories', 'educrat'); ?></h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="menu-block">
                        <h4></h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="second-block">

            </div>
        </div>
        <div class="bottom-footer">
            <p>© <?= date('Y') ?> Educrat. <?php _e('All Rights Reserved.', 'educrat'); ?></p>
            <!-- Footer bottom menu -->
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
</body>

</html>