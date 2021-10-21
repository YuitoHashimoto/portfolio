<?php
/*
Template Name: Archive
*/
?>
<?php wp_head(); ?>
<?php get_header() ?>
    <main class="works">
        <div class="head__logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/mainLogo.svg" alt="ポートフォリオロゴ"></a></div>
        <?php include "nav.php" ?>
        <div class="works__content">
            <div class="works__content__box">
                <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                ?>
                <article class="works__content__box__art">
                    <a href="<?php the_permalink($id) ?><?php get_the_permalink(); ?>">
                        <?php 
                            $imgUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        ?>
                        <div class="backColor"><div style="background-image:url(<?php echo $imgUrl[0]?>)"></div></div>
                        <p><?php the_title(); ?></p>
                    </a>
                </article>
                <?php
                    endwhile;
                endif;
                ?>            
            </div>
            <div class="works__content__txt">
                <h1>WORKS</h1>
                <nav class="works__content__txt__nav">
                    <ul>
                        <?php
                        $tags = get_tags();
                        foreach( $tags as $tag) { 
                        echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
