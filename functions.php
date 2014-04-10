<?php
/**
 * innovation1000 functions and definitions
 *
 * @package innovation1000
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

function print_categories()
{
    //TODO Fixa cache åt denna å print_tags? Kan nog bli segt om de har flera hundra posts/tags.
    $categories = get_the_category();
    $separator = ' ';
    $output = '';
    foreach ($categories as $category) {
        $output .= '<a href="' . get_category_link($category->term_id) . '">' . mb_strtoupper($category->cat_name) . '</a>' . $separator;
    }
    echo trim($output, $separator);
}

function print_tags()
{
    $posttags = get_the_tags();
    if ($posttags) {
        foreach ($posttags as $tag) {
//            echo '<a href="' . esc_url($category_link) . '">' . $category->cat_name . '</a>';
            echo '<span class="tag-item"><a href="' . get_tag_link($tag->term_id) . '" >' . mb_strtoupper($tag->name) . '</a></span>';
//            echo '<span class="tag-item">' . mb_strtoupper($tag->name) . '</span>';
        }
    }
}

function print_all_posts()
{
    $args = array(/*'numberposts' => '10',*/ /*'category' => get_cat_ID('artiklar')*/);
    $all_posts = wp_get_recent_posts($args);
    foreach ($all_posts as $item) {
        echo '<li><a href="' . get_permalink($item["ID"]) . '">' . $item["post_title"] . '</a></li>';
    }
}

function print_all_tags()
{
    $args = array(/*'numberposts' => '10',*/ /*'category' => get_cat_ID('artiklar')*/);
    $all_tags = get_tags($args);
    foreach ($all_tags as $item) {
        echo '<li><a href="' . get_permalink($item["ID"]) . '">' . $item["post_title"] . '</a></li>';
    }
}

function print_most_common_tags()
{
    // Tog från:
    // http://wordpress.stackexchange.com/questions/48557/display-list-of-most-used-tags-in-the-last-30-days
    global $wpdb;
    $term_ids = $wpdb->get_col("
    SELECT term_id FROM $wpdb->term_taxonomy
    INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
    INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
    ");
//    WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

    if (count($term_ids) > 0) {
        $tags = get_tags(array(
            'orderby' => 'count',
            'order' => 'DESC',
            'number' => 42,
            'include' => $term_ids,
        ));
        foreach ((array)$tags as $tag) {
            echo '<li><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
        }
    }
}

function print_most_commented_articles()
{

    $popular = new WP_Query(array(
        'post_type' => array('post'),
        'showposts' => 5,
//        'category_name' => 'whaeva',
        'ignore_sticky_posts' => true,
        'orderby' => 'comment_count',
        'order' => 'dsc',
//                'date_query' => array(
//                    array(
//                        'after' => '1 week ago',
//                    ),
//                ),
    ));
    while ($popular->have_posts()): $popular->the_post();

        echo '<li><a href="' . get_permalink($popular->id) . '">' . get_the_title() . '</a></li>';


    endwhile;
}

function print_ordlista()
{
    $ordlista = new WP_Query(array(
        'post_type' => array('post'),
        'showposts' => 5,
        'tag' => 'ordlista',
        'ignore_sticky_posts' => true,
    ));
    while ($ordlista->have_posts()): $ordlista->the_post();
        echo '<li><a href="' . get_permalink($ordlista->id) . '">' . get_the_title() . '</a></li>';
    endwhile;
}

function get_latest_tips()
{
    $tips = new WP_Query(array(
        'post_type' => array('post'),
        'showposts' => 1,
        'category_name' => 'dagens tips',
        'ignore_sticky_posts' => true,
    ));
//    while ($tips->have_posts()): $tips->the_post();
//        echo '<a href="' . get_permalink($tips->id) . '">' . 'DAGENS TIPS ' . mb_strtoupper(get_the_time('j F', $tips->ID)) . '</a>';
//    endwhile;

    if ($tips->have_posts()) {
        $tips->the_post();
        return '<a href="' . get_permalink($tips->id) . '">' . 'DAGENS TIPS ' . mb_strtoupper(get_the_time('j F', $tips->ID)) . '</a>';
    } else {
        return '<a href="/">INGA TIPS ÄNNU</a>';
    }

}

if (!function_exists('innovation1000_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function innovation1000_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on innovation1000, use a find and replace
         * to change 'innovation1000' to the name of your theme in all the template files
         */
        load_theme_textdomain('innovation1000', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'innovation1000'),
        ));

        //Add the "dagens tips" to the primary menu:
        add_filter('wp_nav_menu_items', 'your_custom_menu_item', 10, 2);
        function your_custom_menu_item($items, $args)
        {
            if ($args->theme_location == 'primary') {
                $items .= '<li class="hidden-xs menu-item">' . get_latest_tips() . '</li>';
            }
            return $items;
        }


        // Enable support for Post Formats.
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('innovation1000_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Enable support for HTML5 markup.
        add_theme_support('html5', array('comment-list', 'search-form', 'comment-form',));
    }
endif; // innovation1000_setup
add_action('after_setup_theme', 'innovation1000_setup');

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function innovation1000_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'innovation1000'),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'innovation1000_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function innovation1000_scripts()
{
    wp_enqueue_style('innovation1000-style', get_stylesheet_uri());

    wp_enqueue_script('innovation1000-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('innovation1000-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '20140407', true);
    wp_enqueue_script('twitter', get_template_directory_uri() . '/js/twitter.js', array(), '20140409', true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20120206', true);
    wp_enqueue_script('customizer', get_template_directory_uri() . '/js/customizer.js', array(), '20120206', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.0.js', array(), '20120206', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'innovation1000_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
