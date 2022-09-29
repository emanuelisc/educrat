<?php //schema_data(); 
$main_page = get_page_by_path('main');
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>© <?= date('Y') ?> <?php the_field('copyright_text', $main_page->ID); ?></p>
                <div class="footer-but-container mobile">
                    <a href="#top-link" class="scroller mobile">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="footer-but-container">
                    <a href="<?php the_field('button_link_url', $main_page->ID); ?>" class="blue-btn"><?php the_field('button_link_name', $main_page->ID); ?></a>
                    <a href="#top-link" class="scroller desktop">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

<?php wp_footer(); ?>

</html>