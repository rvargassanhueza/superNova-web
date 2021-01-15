<?php get_header(); ?>
  <div class="single">
	<!--<div class="titulo_single"><?php the_title(); ?></div>-->
    <!--<div class="volver"><a href="javascript:history.back(1)"><img src="<?php echo bloginfo('template_url'); ?>/img/volver.png" alt="Volver atrás"/></a></div>-->
	 <div class="contFull">
    <div class="contenido_single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="contTopicos">
          <?php

                $categoria = get_the_category();
                $parent = get_cat_name($categoria[0]->category_parent);
                // echo $parent;

                    $idCat  = $categoria[0]->cat_ID;
                    $nomCat = $categoria[0]->cat_name;
                    $categories =  get_categories('child_of='.$idCat);

                    $parent_category_id = get_cat_ID($parent);

                    $category_id = get_cat_ID($nomCat);

                    $parent_link = get_category_link($parent_category_id);

                    $category_link = get_category_link($category_id);
                ?>
                <p>Tópicos: </p> 
                <a href="<?php echo esc_url( $parent_link ); ?>">
                  <div class="nomCategoria"><?php echo "<p>$parent</p>"?></div>
                </a>
                <a href="<?php echo esc_url( $category_link ); ?>">
                  <div class="nomSubCategoria"><?php echo "<p>- $nomCat</p>"?></div>
                </a>
              </div>
            <div class="titulo_single"><?php the_title(); ?></div>
            <div class ="singleFecha"><br><span>Publicado el  <?php the_time( 'l, j \d\e F \d\e Y' ); ?></span>
            <br><span>Autor: <?php the_author_posts_link(); ?></span></div>
     
        <?php the_post_thumbnail( $thumbnail); ?>
        <?php the_content(__('')); ?>

      <div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.radiosupernova.cl%2F&amp;src=sdkpreparse">Compartir</a></div>
		<?php endwhile; endif; ?>
    </div>
   <?php get_sidebar('sidebar'); ?>
    </div> 
    <!--PUBLICIDAD-->
            <!--============= BLOQUE TOP HOME 4===================-->
            <div class="publicidad_dfp banner-top-4" id ="banner-top-4">
              
                    <div
                        class="coop_blockSlot"
                        id="coop_d_990x90_01_1"
                        data-adunit='coop_d_990x90_01_1'
                        data-slot="/1020719/coop_d_990x90_01"
                        data-dimensions="4"
                        >
                    </div>
                
            </div>
            <!--============= /BLOQUE TOP HOME 4===================--> 
        <!--/PUBLICIDAD-->
        <?php get_footer(); ?> 
  </div>
  
</div>



