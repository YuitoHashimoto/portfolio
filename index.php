<?php wp_head(); ?>
<?php get_header() ?>
    <main class="index">
        <div class="head__logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/mainLogo.svg" alt="ポートフォリオロゴ"></a></div>
        <?php include "nav.php" ?>
        <div class="index__main">
            <div class="index__main__img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/mainPro.png)">
            </div>
            <p class="index__main__txt">Yuito Hashimoto</p>
        </div>
        <div class="index__foot">
            <div class="index__foot__content">
                <a href="https://github.com/YuitoHashimoto"><img class="index__foot__content__git" src="<?php echo get_template_directory_uri(); ?>/img/gitHubLogo.svg" alt="GitHubロゴ"></a>
                <a href="https://www.instagram.com/pf_loud/"><img class="index__foot__content__insta" src="<?php echo get_template_directory_uri(); ?>/img/instaLogo.svg" alt="Instagramロゴ"></a>
                <p class="index__foot__content__mail">Email : hashimoto.yit@gmail.com</p>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>