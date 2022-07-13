<?php get_header();?>
    <main id="other">
        <section class="cnt-in">
            <div class="breadcrumb">
                <a class="breadcrumb__inner" href="<?php echo home_url();?>">TOP</a>
                <a class="breadcrumb__inner" href="<?php echo get_site_url();?>/contact">お問い合わせ</a>
                <p class="breadcrumb__inner">お問い合わせ内容の完了</p>
            </div>
        </section>

        <section class="cnt-in-center">
            <div class="contact-finish-wrap">
                <?php echo apply_shortcodes( '[mwform_formkey key="28"]' ); ?>
                <a href="<?php echo home_url();?>" class="btn-link">TOPへ戻る</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>