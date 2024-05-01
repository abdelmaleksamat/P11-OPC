<div class="filter">
    <!-----  contenu dynamique grâce à WP_QUERY à l'intérieur de card-template   --------->
	<?php 	// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
	$args = array(
		'orderby' => 'date',
		'post_type' => 'photo',
		// 'meta_value' => 'mariage',
		'posts_per_page' => 8, // 8 articles,
	);
	// 2. On exécute la WP Query

    $query = new WP_Query($args);
	 
     if($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>

        <?php   
        
        // image de chaue post
        $image_url = get_the_post_thumbnail_url();
        // Récupère le texte alternatif de l'image.
        $image_alt = get_post_meta(get_the_ID(), '_wp_attachment_image_alt', true); 

        $post_id = get_post_meta(get_the_ID(), 'reference', true);

        ?>
            <!---- metre dans une template     ---->
            <article class="card">
                <img class="post_img" src="<?php echo $image_url ?>" alt="<?php echo $image_alt?>" data-imgId="<?php echo $post_id ?>">
                <h3 class="title"> <?php  echo the_title() ?></h3>
                <span><?php echo the_terms(get_the_ID(), 'categorie', false); ?></span>
            </article>
        <?php endwhile; wp_reset_query();?>
    <?php endif; ?>


    

	
</div>