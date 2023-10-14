<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="keywords" content="">
  <meta name="description" content="">

  <title>Ninolog</title>

  <link rel="stylesheet" href="/css/reset.css" media="all">
  <link rel="stylesheet" href="/css/style.css" media="all">
  <!-- WebFonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Yomogi&display=swap" rel="stylesheet">

  <!-- jquey plugin css -->
  <link rel="stylesheet" href="/css/plugins/slick.css" media="all">
  <link rel="stylesheet" href="/css/plugins/slick-theme.css" media="all">

  <!-- js -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/slick.min.js"></script>
  <script src="/js/common.js"></script>


  <!--[if lt IE 9]>
<link rel="stylesheet" href="/css/layout.css" media="screen">
<link rel="stylesheet" href="/css/plugin/jquery.fancybox.css" media="all">
<link rel="stylesheet" href="/css/plugin/slick.css" media="all">
<link rel="stylesheet" href="/css/plugin/slick-theme.css" media="all">
<script src="/js/html5shiv.min.js"></script>
<script src="/js/css3-mediaqueries.js"></script>
<![endif]-->


  <!-- favicon
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/images/favicons/manifest.json">
<link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff"> -->
<link rel="icon" type="image/png" href="/images/common/favicon.ico">

  <!-- tracking coad -->


</head>

<body>
  <div id="wrapper">
    <div class="site-wrap">
      <div class="site_left-area">
        <header class="header">
          <div class="header-main">
            <div class="logo">
              <a href="/"><img src="/images/common/logo.png" alt="とあるエンジニアのほのぼの日常"></a>
            </div>
            <div class="menu-area">
              <?php $current_slug = basename($_SERVER['REQUEST_URI']); ?>
              <ul class="menu-list">
                <li class="menu-item <?php if($current_slug == '') echo '_active'; ?>"><a href="/">ホーム</a></li>
                <li class="menu-item <?php if($current_slug == 'about') echo '_active'; ?>"><a href="/about/">中の人について</a></li>
                <li class="menu-item <?php if($current_slug == 'blog') echo '_active'; ?>"><a href="/blog/">日常ブログ</a></li>
                <li class="menu-item <?php if($current_slug == 'works') echo '_active'; ?>"><a href="/works/">制作物一覧</a></li>
              </ul>
            </div>
          </div>
          <div class="contact-area">
            <a href="/contact/"><img src="/images/common/contact.png" alt="お問い合わせ"></a>
          </div>
        </header>
      </div><!-- /site_left-area -->
      <div class="site_right-area" id="page_top">
        <div class="right-area_inner">
            <!-- top_main-wrapper -->
            <div class="top_main-wrapper">
              <div class="title-area">
                <h1>Ninolog</h1>
                <p>
                  思いつきで作成したサイトにつき、コンテンツ迷子中。<br>
                  ホームページ制作に関する日常や知識をつらつら。
                </p>
              </div>
            </div><!-- /top_main-wrapper -->