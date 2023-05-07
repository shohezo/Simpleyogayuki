<?php get_header(); ?>
<?php
/* 
Template Name: ヨガページ
*/
?>
<article id="yoga-page">
    <section class="ly_section hp_ptLg hp_pbLg hp_bgColor" id="about">
        <div class="ly_inner">
            <span class="el_section_ttl_sub">ヨガについて</span>
            <h2 class="el_section_ttl">About</h2>
            <div class="bl_section hp_flex hp_ptMd hp_column_tb">
                <figure class="bl_section_imgWrapper" data-aos="fade-up">
                    <img src="<?php bloginfo('template_url');?>/img/yoga00.png" alt="スタジオ風景" />
                </figure>
                <div class="bl_section_body">
                    <div>
                        <!-- <h3 class="bl_section_header">hogehoge</h3> -->
                        <h3 class="bl_section_header hp_mbSm">
                            小さな隠れ家ヨガサロン
                        </h3>
                    </div>
                    <p class=" bl_section_txt">
                        自宅を解放して、少人数制のレッスンを行っています。
                        ヨガが初めての方、身体が硬いと感じている方、運動が苦手な方も安心して参加頂けます。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ly_section hp_ptMd hp_pbSm" id="menu-yoga">
        <div class="ly_inner">
            <span class="el_section_ttl_sub">メニュー</span>
            <h2 class="el_section_ttl">Menu</h2>
            <div class="bl_section">
                <div class="menu">
                    <dl>
                        <dt class="strong">グループレッスン（60min）</dt>
                    </dl>
                    <dl class="indent">
                        <dt> - ドロップイン</dt>
                        <dd>¥2,500</dd>
                    </dl>
                    <dl class="indent">
                        <dt> - 回数券（4回分）</dt>
                        <dd>¥8,000</dd>
                    </dl>
                    <div class="notes">
                        <p>・有効期限3ヶ月</p>
                        <p>・期限切れチケットは+500円で使用可能</p>
                        <p>・当日キャンセルは1枚消化扱い</p>
                    </div>
                    <span class="isolation hp_mtSm hp_mbSm"></span>
                    <dl>
                        <dt class="strong">プライベートレッスン（60min）</dt>
                        <dd>¥5,000</dd>
                    </dl>
                    <span class="isolation hp_mtSm hp_mbSm"></span>
                    <dl>
                        <dt class="strong">体験レッスン</dt>
                        <dd>¥1,500</dd>
                    </dl>
                    <div class="notes">
                        <p>・グループでの参加</p>
                        <p>・1人1回のみ</p>
                    </div>
                    <span class="isolation hp_mtSm hp_mbSm"></span>
                    <dl>
                        <dt class="strong">レンタルヨガマット</dt>
                        <dd>¥200</dd>
                    </dl>
                    <span class="isolation hp_mtSm hp_mbSm"></span>
                    <div class="box hp_bgColor">
                        <dl>
                            <dt class="strong">ご利用頂く際の注意点</dt>
                        </dl>
                        <dl>
                            <p>
                                ・毎月２０日に次月のスケジュールが出ます。キャンセルの場合、前日午後6時までにご連絡下さい。当日キャンセルの場合、1チケット消化。または、お振込にて１レッスン代をお支払頂きます。
                            </p>
                            <p>
                                ・場所は岐阜県岐阜市内です。詳細はご予約時にお伝えします。
                            </p>
                            <p>
                                ・お飲み物、タオルをお持ちになって動きやすい格好でお越し下さい。
                            </p>
                            <p>
                                ・自宅でのレッスンとなっておりますので女性のみとさせて頂きます。精神疾患のある方、他の方のご迷惑となる様な非常識な行動をされる方はお断りしております。ご理解の程よろしくお願いします。
                            </p>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ly_section hp_pbLg" id="reserve">
        <div class="ly_inner">
            <span class="el_section_ttl_sub">ご予約はこちら</span>
            <h2 class="el_section_ttl">Reserve</h2>
            <div class="bl_section hp_flex hp_jcc">
                <p class="bl_section_txt hp_mbSm hp_mtSm">
                    ヨガは完全予約制となっておりす。<br>
                    ご予約ページから事前にお申し込みください。
                </p>
            </div>
            <a href="<?php bloginfo(
                "url"
                ); ?>/reserve_yoga" class="el_btn hp_centering">
                <div class="arrow"></div>
                <p>ご予約はこちら</p>
            </a>
        </div>
    </section>
</article>
<?php get_footer(); ?>