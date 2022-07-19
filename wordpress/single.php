<?php get_header();?>
    <main id="other">
    <?php
        if(have_posts()) :  while(have_posts()) : the_post();
    ?>
        <section class="cnt-in">
            <div class="breadcrumb">
                <a class="breadcrumb__inner" href="<?php echo home_url();?>">TOP</a>
                <p class="breadcrumb__inner">ブログ詳細 </p>
            </div>
        </section>

        <section class="cnt-in-center">
                <div class="blog-detail-wrap">
                    <p class="blog-detail-wrap__title"><?php the_title(); ?></p>
                    <div class="blog-detail-wrap__datecat">
                        <p class="date"><?php the_time( 'Y/m/d' ); ?></p>
                        <?php 
                            $categories = get_the_category(); 
                            if( count( $categories ) > 0 ):
                        ?>
                            <?php foreach( $categories as $category ) : ?>
                                <p class="<?php echo ( $category->term_id == 1 ) ? 'cat_rec' : 'cat_act'; ?>"><?php echo $category->name; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="blog-detail-wrap__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="blog-detail-wrap__bottom">
                        <ul>
                            <li>箇条書きのリスト１テキストテキストテキストテキスト</li>
                            <li>箇条書きのリスト１テキストテキストテキストテキスト</li>
                            <li>箇条書きのリスト１テキストテキストテキストテキスト</li>
                        </ul>
                    </div>
                </div>
            </section>

        <?php get_template_part('template', 'parts/contact'); ?>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>