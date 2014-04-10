<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package innovation1000
 */
get_header(); ?>

<div class="container">

    <div class="container-cloud-left col-md-6 col-sm-6 hidden-xs">
        <div class="cloud-left">
            <div class="cloud-titlebar cloud-title-left">
                <span class="cloud-title">Välj bland rubriker</span>
                <span class="load-more"><a href="javascript:void(0)" onclick="tusentips.shufflePosts();">LADDA FLER</a></span>
            </div>
            <ul id="postList" class="cloud-body cloud-body-left">
                <?php print_all_posts(); ?>
            </ul>

        </div>
    </div>

    <div class="container-cloud-right col-md-6 col-sm-6 hidden-xs">
        <div class="cloud-right">
            <div class="cloud-titlebar cloud-title-right">
                <span class="cloud-title">Välj bland ämnen</span>
                <span class="load-more"><a href="javascript:void(0)" onclick="tusentips.shuffleTags();">LADDA FLER</a></span>
            </div>
            <ul id="tagList" class="cloud-body cloud-body-right">
                <?php print_most_common_tags(); ?>
            </ul>
        </div>
    </div>
</div>

<div id="primary" class="container">

    <?php get_sidebar('left'); ?>

    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

        <!-- Welcome-text that is hidden at first, and maybe revealed with js: -->
        <article id="welcome-article"
                 class="hide post type-post status-publish format-standard hentry category-artiklar">
            <header class="entry-header">
                <h1 class="entry-title">Välkommen till innovationssamhället</h1>
            </header>
            <div class="entry-content">
                <p>Det kan kännas tjatigt att säga, men vi lever i en värld av allt snabbare förändringar.
                    Förändringstakten i näringslivet gör att de företag som inte hänger med när som helst kan bli
                    utkonkurrerade. Några kallar denna nyordning för innovationssamhället. Varför? Jo, för att det enda
                    som
                    skapar långsiktig trygghet i dagens värld är förmågan att ständigt förändra sig och prestera nya
                    innovationer.</p>

                <p>
                    De goda nyheterna är nämligen att mycket av den anpassning som krävs kan ske gratis – genom att
                    förändra
                    sättet att leda, driva och styra företag.
                    Den här hemsidan, Tusen tips om innovation, är till för dig som vill bli framgångsrik i detta nya
                    samhälle
                    men inte vet riktigt var du ska börja.
                    Vi som driver Tusen tips är Leif Denti, forskare i innovationspsykologi och managementkonsult, samt
                    Martin
                    Kreuger, journalist och chefsutbildare. Vi bevakar området för att kunna ge dig nya råd och insikter
                    varje
                    dag – både här på sidan och i vår mobilapp – om hur du leder och organiserar din arbetsplats mot
                    större
                    innovationsförmåga.
                </p>

                <p>
                    Vårt arbete möjliggörs av innovationsmyndigheten Vinnova och forskningsstiftelsen IMIT.
                    Så välkommen, både till innovationssamhället och till hemsidan som guidar dig dit. Och välkommen
                    också att
                    bidra med all din egen kunskap och dina kommentarer.</p>

                <p> Leif Denti och Martin Kreuger,
                    redaktörer</p>
            </div>
        </article>

        <?php
        //        $args = array(
        //            'category_name' => 'artiklar',
        //            'paged' => $paged
        //        ,
        //            'posts_per_page' => 5     <- denna sak inte användas
        //        );
        //        $wp_query = new WP_Query($args);
        if (have_posts()) :
            while (have_posts()) : the_post();
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
//					the_title();

            endwhile;
            innovation1000_paging_nav(); //
        else :
            get_template_part('content', 'none');
        endif; ?>
    </main>
    <!-- #main -->
    <?php get_sidebar('right'); ?>
</div><!-- #primary -->


<?php get_footer(); ?>

<script>
    // show welcome article to new visitors:
    if (document.cookie.indexOf("visited-before") < 0) {
        // set a new cookie
        expiry = new Date();
        expiry.setTime(expiry.getTime() + (3000 * 24 * 60 * 60 * 1000));
        document.cookie = "visited-before=yes; expires=" + expiry.toGMTString();
        // show welcome message:
        document.getElementById("welcome-article").className =
            document.getElementById("welcome-article").className.replace(/\bhide\b/, '');
    }
</script>