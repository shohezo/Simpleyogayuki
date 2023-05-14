<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- OGP -->
    <meta property="og:url" content="https://simpleyoga-yuki.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="-Simple yoga- yuki" />
    <meta property="og:description" content="岐阜の小さな隠れ家サロン | -Simple yoga- yuki" />
    <meta property="og:site_name" content="-Simple yoga- yuki" />
    <meta property="og:image"
        content="https://simpleyoga-yuki.com/wp-content/themes/theme_simpleyogayuki/img/logo.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <!-- <link rel="icon" type="image/-icon" href="/img/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <script src="https://kit.fontawesome.com/30c76fcb1e.js" crossorigin="anonymous"></script>
    <!-- Adobe Fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: 'jrx4yrj',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <!-- aosライブラリの読み込み -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type=" text/javascript" src="./js/jquery-migrate-1.4.1.min.js"></script>
</head>
<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <!-- <a class="el_btn hp_mbSm" href="<?php bloginfo('url');?>/reserve">ご予約はこちら</a> -->
        <li class="bl_drawer_item"><a href="<?php echo esc_url(home_url('/'));?>">TOP</a></li>
        <li class="bl_drawer_item"><a href="<?php echo esc_url(home_url('/'));?>/intro">INTRO</a>
            <ul>
                <li><a href="<?php bloginfo('url');?>/intro/#profile"> - profile</a></li>
                <li><a href="<?php bloginfo('url');?>/intro/#service"> - service</a></li>
            </ul>
        </li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/Cake">CAKE</a>
            <ul>
                <li><a href="<?php bloginfo('url');?>/Cake/#concept"> - concept</a></li>
                <li><a href="<?php bloginfo('url');?>/Cake/#menu-cake"> - menu</a></li>
                <li><a href="<?php bloginfo('url');?>/Cake/#training"> - training</a></li>
                <li><a href="<?php bloginfo('url');?>/Cake/#adviser"> - adviser</a></li>
                <li><a href="<?php bloginfo('url');?>/reserve_cake"> - reserve</a></li>
                <li><a href="<?php bloginfo('url');?>/reserve_online"> - online</a></li>
            </ul>
        </li>
        <li class=" bl_drawer_item"><a href="<?php bloginfo('url');?>/yoga">YOGA</a>
            <ul>
                <li><a href="<?php bloginfo('url');?>/yoga/#about"> - about</a></li>
                <li><a href="<?php bloginfo('url');?>/yoga/#menu-yoga"> - menu</a></li>
                <li><a href="<?php bloginfo('url');?>/reserve_yoga"> - reserve</a></li>
            </ul>
        </li>
    </ul>
    <div class="bl_drawerBtn">
        <!-- ハンバーガーボタン -->
        <span class="hambarg"></span>
        <span class="hambarg"></span>
        <span class="hambarg"></span>
    </div>
    <!--bl_drawerBtn-->
</div>
<!--bl_drawer-->
<!-- ページトップボタン -->
<!-- <a class="el_pageTop" href="#"><i class="fas fa-angle-double-up"></i></a> -->
<!-- スクロールダウン -->

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <header class="ly_header" id="header">
        <div class="header__lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <!-- ヘッダー画像の条件分岐 -->
    <?php if(is_page('intro')){?>
    <div class="ly_heading">
        <p>はじめに</p>
        <h2>INTRO</h2>
    </div>
    <?php }else if(is_page('reserve_yoga')){?>
    <div class="ly_heading">
        <p>ヨガのご予約</p>
        <h2>RESERVE
            <span>-YOGA-</span>
        </h2>
    </div>
    <?php }else if(is_page('reserve_cake')){?>
    <div class="ly_heading">
        <p>シフォンケーキのご予約(対面)</p>
        <h2>RESERVE<span>-CAKE-</span></h2>
    </div>
    <?php }else if(is_page('reserve_online')){?>
    <div class="ly_heading">
        <p>シフォンケーキのご予約(オンライン)</p>
        <h2>RESERVE<span>-CAKE online-</span></h2>
    </div>
    <?php }else if(is_page('booking-form')){?>
    <div class="ly_heading">
        <p>ご予約入力フォーム</p>
        <h2>RESERVATION</h2>
    </div>
    <?php }else if(is_page('booking-thanks')){?>
    <div class="ly_heading">
        <h2>THANK YOU!</h2>
    </div>
    <?php }else if(is_page('cake')){?>
    <div class="ly_heading">
        <p>魔法の米粉シフォンケーキ</p>
        <h2>CAKE</h2>
    </div>
    <?php }else if(is_page('yoga')){?>
    <div class="ly_heading">
        <p>ヨガ</p>
        <h2>YOGA</h2>
    </div>
    <?php }else{}?>

    <?php wp_head();?>