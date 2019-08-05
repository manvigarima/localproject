<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Hospital Lite
 */

get_header(); ?>
<section id="our-services">
    <div class="container">
        <div class="middle-align content_sidebar">
            <?php
                $left_right = get_theme_mod( 'vw_hospital_lite_theme_options','One Column');
                if($left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-md-4"><?php get_sidebar(); ?></div>
                    <div class="col-md-8">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                            <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                        <?php endif; ?>

                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() ); 
                          
                            endwhile;
                            wp_reset_postdata();
                            else :

                                get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                    'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php }else if($left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-md-8">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                            <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                        <?php endif; ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                              
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() ); 
                              
                            endwhile;
                            wp_reset_postdata();
                            else :

                                get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                    'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4"><?php get_sidebar(); ?></div>
                </div>
            <?php }else if($left_right == 'One Column'){ ?>
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                        <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                    <?php endif; ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
            <?php }else if($left_right == 'Three Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                    <div class="col-md-6">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                            <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                        <?php endif; ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                              
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() ); 
                              
                            endwhile;
                            wp_reset_postdata();
                            else :

                                get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                    'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                </div>
            <?php }else if($left_right == 'Four Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                    <div class="col-md-3">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                            <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                        <?php endif; ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                              
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() ); 
                              
                            endwhile;
                            wp_reset_postdata();
                            else :

                                get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                    'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                    <div id="sidebar" class="col-md-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
                </div>
            <?php }else if($left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div class="col-md-9">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <div class="row">
                            <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                                <span class="sticky-post"><?php esc_html_e( 'Featured', 'vw-hospital-lite' ); ?></span>
                            <?php endif; ?>
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                  
                                while ( have_posts() ) : the_post();

                                    get_template_part( 'template-parts/grid-layout' ); 
                                  
                                endwhile;
                                wp_reset_postdata();
                                else :

                                    get_template_part( 'no-results' ); 

                                endif; 
                            ?>
                        </div>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'vw-hospital-lite' ),
                                    'next_text'          => __( 'Next page', 'vw-hospital-lite' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hospital-lite' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3"><?php get_sidebar(); ?></div>
                </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>