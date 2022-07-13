<footer>
        <div class="cnt-in-center">
            <a href="<?php echo home_url();?>">
                <img class="footer_logo" src="<?php echo get_template_directory_uri()?>/assets/img/common/footer_logo.svg" alt="">
            </a>
            <div class="footer-wrap">
                <ul class="footer-wrap__menu">
                    <li class="under-hover white">
                        <a href="<?php echo get_site_url();?>/recovery">コロバニィⓇリカバリー</a>
                    </li>
                    <li class="under-hover white">
                        <a href="<?php echo get_site_url();?>/active">コロバニィⓇアクティブ</a>
                    </li>
                    <li class="under-hover white">
                        <a href="<?php echo get_site_url();?>/shop">取扱店一覧</a>
                    </li>
                    <li class="under-hover white">
                        <a href="<?php echo get_site_url();?>/company">会社概要</a>
                    </li>
                    <li class="under-hover white">
                        <a href="<?php echo get_site_url();?>/contact">お問い合わせ</a>
                    </li>
                    <li class="under-hover white">
                        <a class="with-icon" href="https://alles-inc.com/">運営会社</a>
                    </li>
                </ul>
                <p class="cpr_txt">©︎ alles Inc</p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/lib.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
<?php wp_footer() ?>
</html>