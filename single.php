<?php wp_head(); ?>
<?php get_header() ?>
    <main class="works">
        <div class="head__logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/mainLogo.svg" alt="ポートフォリオロゴ"></a></div>
        <?php include "nav.php" ?>
        <div class="works__content">
            <div class="works__content__box">
                <h1><?php the_title() ?></h1>
                <?php if(have_posts()): ?>
                    <?php while( have_posts() ) : the_post(); ?>
                <div class="worksContent">
                    <?php the_content() ?>
                </div>
                    <?php endwhile ;?>
                <?php endif ;?>
                <div class="urlBtns">
                    <a class="siteUrl" href=""></a>
                    <a class="gitUrl" href=""></a>
                </div>
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