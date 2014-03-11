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

function latest_published_articles()
{
    $args = array('numberposts' => '5', 'category' => get_cat_ID('artiklar'));
    $recent_posts = wp_get_recent_posts($args);
    foreach ($recent_posts as $recent) {
        echo '<li><img src="' . get_bloginfo('template_directory') . '/img/list_marker.png"/><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . esc_attr($recent["post_title"]) . '" >' . $recent["post_title"] . '</a> </li> ';
    }
}

function most_common_tags_in_last_days()
{
    //            Vanligaste taggarna senaste 30 dagarna. Se:
    //             http://wordpress.stackexchange.com/questions/48557/display-list-of-most-used-tags-in-the-last-30-days
    global $wpdb;
    $term_ids = $wpdb->get_col("
    SELECT term_id FROM $wpdb->term_taxonomy
    INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
    INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
    WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

    if (count($term_ids) > 0) {
        $tags = get_tags(array(
            'orderby' => 'count',
            'order' => 'DESC',
            'number' => 28,
            'include' => $term_ids,
        ));
        echo '<ul class="tag-list">';
        $first = true;
        foreach ((array)$tags as $tag) {
            if ($first) {
                $first = false;
            } else {
                echo '<div class="tag-list-separator"></div>';
            }
            echo '<li class="tag-list-item"><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
        }
        echo '</ul>';
    }
}

function most_commented_articles() {

            $popular = new WP_Query( array(
                'post_type'             => array( 'post' ),
                'showposts'             => 5,
                'cat'                   => 'MyCategory',
                'ignore_sticky_posts'   => true,
                'orderby'               => 'comment_count',
                'order'                 => 'dsc',
//                'date_query' => array(
//                    array(
//                        'after' => '1 week ago',
//                    ),
//                ),
            ) );
            while ( $popular->have_posts() ): $popular->the_post();

                echo  '<div><a href="' . get_permalink( $popular->id ) . '">' .  get_the_title() . '</a></div>';


             endwhile;
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
