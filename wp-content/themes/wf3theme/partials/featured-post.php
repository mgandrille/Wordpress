<?php
$original_query = $wp_query;  // je sauvegarde l'ancienne requete

// j'execute la nouvelle requete pour mon article "featured"
$args=array('posts_per_page'=>1, 'tag' => 'en-avant');
$wp_query = new WP_Query( $args );
?>

<div class="container">
    <?php if ( have_posts() ) :
        while (have_posts()) : the_post(); ?>
            <div class="jumbotron row p-4 p-md-5 rounded bg-light">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
                    <p class="lead my-3"><?php the_excerpt(); ?></p>
                    <p class="lead mb-0">
                        <a href="<?php echo get_permalink(); ?>" class="font-weight-bold">
                            Continue reading...
                        </a>
                    </p>
                </div>
                <div class="col-md-5 offset-1 d-none d-lg-block">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="bd-placeholder-img" width=100% height=100%>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>

<?php
$wp_query = $original_query;
wp_reset_postdata(); ?>