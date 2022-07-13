<?php get_header();?>
    <main id="other">
        <section class="cnt-in">
            <div class="breadcrumb">
                <a class="breadcrumb__inner" href="<?php echo home_url();?>">TOP</a>
                <a class="breadcrumb__inner" href="<?php echo get_site_url();?>/contact">お問い合わせ</a>
                <p class="breadcrumb__inner">お問い合わせ内容の確認</p>
            </div>
        </section>

        <section class="cnt-in-center">
            <div class="contact-confirm-wrap">
                <p class="summary">入力した内容をご確認いただき、送信してください。</p>
                <?php echo apply_shortcodes( '[mwform_formkey key="28"]' ); ?>
            </div>
        </section>

    </main>
    <?php get_footer(); ?>