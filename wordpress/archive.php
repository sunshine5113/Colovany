<?php get_header();?>

<?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $category_id = get_query_var('category_id') ? get_query_var('category_id') : 0;
?>
<main id="other">
    <section class="cnt-in">
        <div class="breadcrumb">
            <a class="breadcrumb__inner" href="<?php echo home_url();?>">TOP</a>
            <p class="breadcrumb__inner">ブログ一覧 </p>
        </div>
    </section>
    <section class="cnt-in-center">
        <div class="mv-wrap__02">
            <h6>Blog list</h6>
            <h2>ブログ一覧</h2>
            <p class="pos__inner">Blog list</p>
        </div>
    </section>
    <?php
        $args = array(
            'post_type' =>  'post',
            'post_status' =>  'publish',
            'paged' => $paged,
            'post_per_page' => 9,
            'orderby' => 'post_date',
            'order' => 'DESC',
        );
        if( !empty( $category_id ) ) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $category_id,
                ]
            ];
        }
        $custom_query = new WP_Query( $args );
    ?>
    <?php if( $custom_query->have_posts() ) : ?>

    <section class="cnt-in-center">
        <div class="blog-list-wrap">
            <div class="blog-list-wrap__btn">
                <a class="btn__inner active" href="">全て</a>
                <a class="btn__inner" href="">リカバリー</a>
                <a class="btn__inner" href="">アクティブ</a>
            </div>
            <div class="blog-list-wrap__blog">
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <div class="blog__inner">
                        <a class="blog__inner-img" href="<?php the_permalink(); ?>">
                            <img src="" alt="blog">
                            <?php if( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/top/product_05.jpg" alt="blog">
                            <?php endif; ?>
                        </a>
                        <?php 
                            $categories = get_the_category(); 
                            if( count( $categories ) > 0 ):
                        ?>
                            <div class="blog__inner-cat">
                                <?php foreach( $categories as $category ) : ?>
                                    <p class="<?php echo ( $category->term_id == 1 ) ? 'cat_rec' : 'cat_act'; ?>"><?php echo $category->name; ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo home_url();?>/blog_detail" class="blog__inner-title"><?php the_title(); ?></a>
                        <p class="blog__inner-content"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="blog-list-wrap__pagination">
                <a class="prev" href="">&lt;&nbsp;前へ</a>
                <a class="page" href="">1</a>
                <a class="page" href="">2</a>
                <a class="page active" href="">3</a>
                <p class="skip" href="">⋯</p>
                <a class="page" href="">9</a>
                <a class="next" href="">次へ&nbsp;&gt;</a>
            </div>
            
        </div>
    </section>

    <?php endif; ?>

    <?php get_template_part('template', 'parts/contact'); ?>

</main>



<?php get_footer(); ?>