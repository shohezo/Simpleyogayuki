<?php get_header(); ?>
<?php
/* 
Template Name: イントロページ
*/
?>
<article id="intro-page">
    <section class="ly_section hp_ptLg hp_pbLg hp_bgColor" id="profile">
        <div class="ly_inner">
            <span class="el_section_ttl_sub">自己紹介</span>
            <h2 class="el_section_ttl">Profile</h2>
            <div class="bl_section hp_flex hp_ptMd hp_column_tb">
                <figure class="bl_section_imgWrapper" data-aos="fade-up">
                    <img src="<?php bloginfo('template_url');?>/img/intro01.png" data-aos="fade-up" alt="プロフィール写真" />
                </figure>
                <div class="bl_section_body">
                    <div>
                        <h3 class="bl_section_header">Simple yoga yuki 代表</h3>
                        <h3 class="bl_section_header hp_mbSm">
                            松久 由起
                        </h3>
                    </div>
                    <p class=" bl_section_txt">
                        初めまして。<br>
                        <br>
                        私はこの三年で、生き方全てが変わりました。<br>
                        <br>
                        それを変えてくれたのがヨガとシフォンケーキ。<br>
                        <br>
                        ネガティブで、人前に出る事が苦手で、ぼんやり生きていた私が、今こうして人前に立ってこうしてお伝えできるようになったのは、ヨガや魔法の米粉シフォンケーキ®︎を通して人と人とのご縁を沢山の方に繋いでもらえたからです。<br>
                        <br>
                        <br>
                        その感動を皆様にお届けできたら、この上ない喜びです。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ly_section hp_ptLg" id="service">
        <div class="ly_inner">
            <span class="el_section_ttl_sub">お仕事</span>
            <h2 class="el_section_ttl">Service</h2>
            <p class="el_section_lead">わたしが行っている2つのお仕事をご紹介します。</p>
            <div class="bl_section hp_flex hp_ptSm hp_reverse hp_column_tb">
                <figure class="bl_section_imgWrapper pc">
                    <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/cake01.png" data-aos="fade-up" alt="シフォンケーキの俯瞰写真" />
                </figure>
                <div class="bl_section_body">
                    <span class="bl_section_header_sub">魔法の米粉シフォンケーキ<div class="font">
                            ®︎
                        </div></span>
                    <h3 class="bl_section_header hp_mb30">
                        Cake
                    </h3>
                    <figure class=" bl_section_imgWrapper tb">
                        <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/cake01.png" data-aos="fade-up" alt="シフォンケーキの俯瞰写真" />
                    </figure>
                    <p class="bl_section_txt">
                        「体に優しく、シフォンケーキの新しい美味しさ」を軸に、私の体感や経験を基に5年以上かけ研究した独自レシピ。
                    </p>
                    <a href="<?php bloginfo(
                "url"
                ); ?>/cake" class="el_btn">
                        <div class="arrow"></div>
                        <p>魔法の米粉シフォンケーキ®︎</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ly_section hp_ptLg hp_pbLg" id="yoga">
        <div class="ly_inner">
            <div class="bl_section hp_flex hp_ptSm hp_column_tb">
                <figure class="bl_section_imgWrapper pc">
                    <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/yoga00.png" data-aos="fade-up" alt="ヨガの風景" />
                </figure>
                <div class="bl_section_body">
                    <span class="bl_section_header_sub">小さな隠れ家ヨガサロン</span>
                    <h3 class="bl_section_header hp_mb30">
                        Yoga
                    </h3>
                    <figure class="bl_section_imgWrapper tb">
                        <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/yoga00.png" data-aos="fade-up" alt="ヨガの風景" />
                    </figure>
                    <p class="bl_section_txt">
                        無垢の床とグリーンに囲まれた空間で、自然の温もりを感じながら呼吸と共にゆったりと身体を動かしていきます。
                    </p>
                    <a href="<?php bloginfo(
                "url"
                ); ?>/yoga" class="el_btn">
                        <div class="arrow"></div>
                        <p>小さな隠れ家ヨガサロン</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</article>
<?php get_footer(); ?>