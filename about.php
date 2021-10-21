<?php
/*
Template Name: About
*/
?>
<?php wp_head(); ?>
<?php get_header() ?>
    <main class="about">
        <div class="head__logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/mainLogo.svg" alt="ポートフォリオロゴ"></a></div>
        <?php include "nav.php" ?>
        <section class="about__head" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/main.png)">
            <h1>ABOUT</h1>
        </section>
        <section class="about__name">
            <div class="about__name__img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/profile.jpg)"></div>
            <div class="about__name__txt">
                <h2>
                    <span>Web Engineer</span><br>
                    YUITO HASHIMOTO
                </h2>
            </div>
        </section>
        <div class="about__content">
            <section class="about__content__box">
                <h3>PROFILE</h3>
                <pre>
1999年大阪生まれ泉州育ち。ECCコンピュータ専門学校Webデザインコース3年 22年卒予定
橋本 唯永(はしもと ゆいと)と申します。フルスタックエンジニア目指しています。
新しいことに触れることも好きで、よく色々なことに挑戦しています！

なぜ目指しているのか？
父がシステムエンジニアとして、交通機関など人の生活に関わる仕事を幼い頃から見る機会が沢山あり、生活の一部を父がエンジニアとして
生活を支えている姿がとても格好よくうつり、私もそうなりたいという目標に変わり、パソコンやプログラムに興味を持ったことがきっかけです。

中学・高校でPCにどっぷりハマりほぼ不登校になり、高校4年生に突入した際に今後自分がどうなっていきたいのか考え高校をやめて、
高等学校卒業程度認定試験をうけました。無事合格しECCコンピュータ専門学校に入学してWeb業界への興味がどんどん深まり自分の目標により近づ
くことが出来ました。

現在は身に付けた技術を仕事にするために、就活にはげんでいます。
趣味はE-sportsで、コミュニティ大会に出場したりコーチングのアルバイトをしたりしています。
友人と飲みに出かけるのも好きで学校の帰りに居酒屋に通ってます! はやくコロナが明けてほしいです。
                </pre>
            </section>
            <section class="about__content__box">
                <h3>SKILL</h3>
                <pre>
HTML, CSS(Sass), JavaScript(Vue, React), PHP(Laravel), Ruby(Ruby on Rails), WordPressに触れています。
私が一番得意なのがJavaScriptです。
幅広く触れているが故に深く勉強できていないのが、私のダメなところだと思いますが実際に案件が来た際に一からの勉強ではなく基礎を知った
状態で はじめられるので作業はスムーズに行えています。
                </pre>
                <div class="about__content__box__skill">
                    <!-- HTML -->
                    <div class="skillVar">
                        <p class="skillVar__lang">HTML</p>
                        <div class="html">

                        </div>
                        <p class="skillVar__num">70%</p>
                    </div>
                    <!-- CSS -->
                    <div class="skillVar">
                        <p class="skillVar__lang">CSS</p>
                        <div class="css">

                        </div>
                        <p class="skillVar__num">65%</p>
                    </div>
                    <!-- JS -->
                    <div class="skillVar">
                        <p class="skillVar__lang">JavaScript</p>
                        <div class="js">

                        </div>
                        <p class="skillVar__num">80%</p>
                    </div>
                    <!-- PHP -->
                    <div class="skillVar">
                        <p class="skillVar__lang">PHP</p>
                        <div class="php">

                        </div>
                        <p class="skillVar__num">60%</p>
                    </div>
                    <!-- WordPress -->
                    <div class="skillVar">
                        <p class="skillVar__lang">WordPress</p>
                        <div class="wp">

                        </div>
                        <p class="skillVar__num">55%</p>
                    </div>
                    <!-- Ruby -->
                    <div class="skillVar">
                        <p class="skillVar__lang">Ruby(学習中)</p>
                        <div class="ruby">

                        </div>
                        <p class="skillVar__num">20%</p>
                    </div>
                    <!-- Python -->
                    <div class="skillVar">
                        <p class="skillVar__lang">Python(学習中)</p>
                        <div class="python">

                        </div>
                        <p class="skillVar__num">10%</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>