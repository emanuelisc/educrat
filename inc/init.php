<?php

$template_directory = get_template_directory() . '/inc/';

// Include theme functions
// *.js and *.css files ar listed in assets.php for correct gulp bumping
include($template_directory . 'assets.php');

// ACF fields php
require $template_directory . 'acf_fields/product_information.php';