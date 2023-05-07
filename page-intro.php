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
                            YuKI
                        </h3>
                    </div>
                    <p class=" bl_section_txt">
                        はじめまして。<br>
                        主に岐阜県で活動をしているYuKIです。<br>
                        <br>
                        小さな自宅サロンで、ヨガ、米粉シフォンケーキのレッスン。<br>
                        その他、出張ヨガや米粉シフォンケーキの養成講座、オンラインの講座も行っております。<br>
                        <br>
                        魔法の米粉シフォンケーキ®は、５年以上かけ研究した独自レシピ。<br>
                        工程にこだわりがあり、シフォンケーキの新しい美味しさを軸に体に優しいレシピになっています。<br>
                        <br>
                        ヨガは、小さな頃から体を動かすことが好きで、小学生の頃バレーボールを始め、中学・高校とバレーボールをしていました。<br>
                        その後、結婚、出産を経てふと自分の体を見たときに自分の体に衝撃を受け<br>
                        「このままではいけない」<br>
                        ふとそう思い、YouTubeを見てヨガを始めたのがキッカケです。<br>
                        <br>
                        元々体を動かすことが好きだった為、ヨガで体を動かしたあとのスッキリとした爽快感がなんとも言えず、1日30分。私だけの時間は、その頃の私にはとても贅沢でとても心地よい時間でした。<br>
                        <br>
                        体型を戻すために始めたヨガがいつの間にか心まで豊かになり、それが心と体のゆとりに繋がり、この体験をもっと色々な方に知ってもらいたい！そう思うようになり、ヨガ講師を目指すことに。<br>
                        <br>
                        今では多くの方々のお力添えをいただきながら、この二つをお仕事として日々活動しています。
                        <br><br><br>
                    </p>
                    <div class="box">
                        <span class="strong">保有資格</span><br>
                        ・RYT200<br>
                        ・ベビトレヨガ<br>
                    </div>
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