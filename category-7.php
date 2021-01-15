<?php get_header(); ?>


<div class="contFull">
    <div class="contNoticias">
    <?php $my_query = new WP_Query('category_name=Panoramas&showposts=80');?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <div class="contNoticia">
        <a href="<?php the_permalink() ?>">
            <div class="contNomCategoria" id="contNomCategoria">
                <?php
                $categoria = get_the_category();
                $parent = get_cat_name($categoria[1]->category_parent);
                if (!empty($parent)) {
                    echo $parent;
                } else {

                    //echo $categoria[0]->cat_name;
                    //echo $categoria[0]->cat_ID;
                    $nomSubCat = $categoria[0]->cat_name;
                     echo "<p>$nomSubCat</p>" ;
    

                }
                ?>
            </div>
                
            <div class="contImagenNoticia">
                <? the_post_thumbnail($medium); ?>
                
            </div>
            <div class="contTituloNoticia"><?php the_title(); ?></div>
            <div class="contBajadaNoticia"> <?the_excerpt(); ?><p1> >Ver Más </p1></div>
        </div></a>
        <?php endwhile; ?>
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
</div>
<?php get_footer(); ?> 

