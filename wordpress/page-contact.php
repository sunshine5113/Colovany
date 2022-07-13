<?php get_header();?>
    <main id="other">
        <section class="cnt-in">
            <div class="breadcrumb">
                <a class="breadcrumb__inner" href="<?php echo home_url();?>">TOP</a>
                <p class="breadcrumb__inner">お問い合わせ </p>
            </div>
        </section>
        <section class="cnt-in-center">
            <div class="mv-wrap__02 company">
                <h6>Contact</h6>
                <h2>お問い合わせ</h2>
                <p class="pos__inner">Contact</p>
            </div>
        </section>

        <section class="cnt-in-center">
            <div class="contact-input-wrap">
                <p class="summary">下記フォームに必要事項を入力の上、送信してください。<br><span class="require">必須</span> は入力必須の項目です。</p>
                <?php echo apply_shortcodes( '[mwform_formkey key="28"]' ); ?>
            </div>
        </section>

    </main>
<?php get_footer(); ?>