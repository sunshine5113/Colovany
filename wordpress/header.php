<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>コロバニィ[COLOVANY]</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="生き生きとした暮らしや健康に貢献することをコンセプトに「コロバニィⓇ」は誕生しました。" />
    <meta property="og:title" content="コロバニィ[COLOVANY]">
    <meta property="og:site_name" content="TOP">
    <meta property="og:type" content="website">
    <meta property="og:description" content="生き生きとした暮らしや健康に貢献することをコンセプトに「コロバニィⓇ」は誕生しました。">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php echo get_template_directory_uri()?>/assets/img/common/ogimage.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/common/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css">
    <link href="<?php echo get_template_directory_uri()?>/assets/css/base.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri()?>/assets/css/lib.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri()?>/assets/css/common.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri()?>/assets/css/top.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri()?>/assets/css/other.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="cnt-in">
            <div class="header-wrap">
                <a href="<?php echo home_url();?>">
                    <h1>
                        <img class="is-pc" src="<?php echo get_template_directory_uri()?>/assets/img/common/top_logo.svg" alt="logo">
                        <img class="is-sp" src="<?php echo get_template_directory_uri()?>/assets/img/common/top_logo_sp.svg" alt="logo">
                    </h1>
                </a>
                <div class="header-wrap__hamburge">
                    <a class="btn-contact-first" href="<?php echo get_site_url();?>/contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.657" height="10.229" viewBox="0 0 13.657 10.229">
                    <g id="email_1_" data-name="email(1)" transform="translate(0 -64.266)">
                      <path id="Path_93182" data-name="Path 93182" d="M7.97,175.2a2.054,2.054,0,0,1-2.283,0l-5.6-3.731C.06,171.446.03,171.424,0,171.4v6.114a1.257,1.257,0,0,0,1.257,1.257H12.4a1.257,1.257,0,0,0,1.257-1.257V171.4c-.03.022-.06.044-.091.065Z" transform="translate(0 -104.278)" fill="#fff"/>
                      <path id="Path_93183" data-name="Path 93183" d="M.535,66.522l5.6,3.731a1.254,1.254,0,0,0,1.395,0l5.6-3.731a1.2,1.2,0,0,0,.535-1A1.258,1.258,0,0,0,12.4,64.266H1.257A1.258,1.258,0,0,0,0,65.524a1.2,1.2,0,0,0,.535,1Z" fill="#fff"/>
                    </g>
                </svg>
                        <p>お問い合わせ</p>
                    </a>
                    <div class="menu__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <ul class="header-wrap__menu">
                    <li>
                        <a class="under-hover" href="<?php echo get_site_url();?>/recovery">コロバニィⓇリカバリー</a>
                    </li>
                    <li>
                        <a class="under-hover" href="<?php echo get_site_url();?>/active">コロバニィⓇアクティブ</a>
                    </li>
                    <li>
                        <a class="under-hover" href="<?php echo get_site_url();?>/shop">取扱店一覧</a>
                    </li>
                    <li>
                        <a class="under-hover" href="<?php echo get_site_url();?>/company">会社概要</a>
                    </li>
                    <li class="is-tablet-hidden">
                        <a href="<?php echo get_site_url();?>/contact" class="btn-contact-first">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.657" height="10.229" viewBox="0 0 13.657 10.229">
                        <g id="email_1_" data-name="email(1)" transform="translate(0 -64.266)">
                          <path id="Path_93182" data-name="Path 93182" d="M7.97,175.2a2.054,2.054,0,0,1-2.283,0l-5.6-3.731C.06,171.446.03,171.424,0,171.4v6.114a1.257,1.257,0,0,0,1.257,1.257H12.4a1.257,1.257,0,0,0,1.257-1.257V171.4c-.03.022-.06.044-.091.065Z" transform="translate(0 -104.278)" fill="#fff"/>
                          <path id="Path_93183" data-name="Path 93183" d="M.535,66.522l5.6,3.731a1.254,1.254,0,0,0,1.395,0l5.6-3.731a1.2,1.2,0,0,0,.535-1A1.258,1.258,0,0,0,12.4,64.266H1.257A1.258,1.258,0,0,0,0,65.524a1.2,1.2,0,0,0,.535,1Z" fill="#fff"/>
                        </g>
                    </svg>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                    <li class="is-tablet">
                        <a href="<?php echo get_site_url();?>/contact">お問い合わせ</a>
                    </li>
                    <li class="is-tablet">
                        <a class="with-icon" href="https://alles-inc.com/">運営会社</a>
                    </li>
                </ul>
            </div>
        </div>
</header>