<?php get_header(header); ?>
<div class="contSlider">
<div class="contBtnMenu">

<div class="contBtnAdmision">
	<a href="/category/noticias/podcast/">
		<div class="contIcon">
			<img src="/wp-content/themes/colEsperanza/icons/ico_admision.svg">
			<p>Podcast</p>
		</div>
	</a>
</div>

<div class="contBtnTaller">
	<a href="/category/noticias/nacionales/">
		<div class="contIcon">
			<img src="/wp-content/themes/colEsperanza/icons/ico_talleres.svg">
			<p>Nacionales</p>
		</div>
	</a>
</div>

<div class="contBtnInformacion">
	<a href="/category/noticias/espectaculos/">
		<div class="contIcon">
			<img src="/wp-content/themes/colEsperanza/icons/ico_info.svg">
			<p>Espectáculos</p>
		</div>
	</a>
</div>

<div class="contBtnNoticias">
	<a href="/category/noticias/panoramas/">
		<div class="contIcon">
		<img src="/wp-content/themes/colEsperanza/icons/ico-news.svg">
		<p>Panoramas</p>
		</div>
	</a>
</div>

</div>
<div class="contCarousel" >
	<div class="owl-carousel" id="owl-carousel">
	<?php $my_query = new WP_Query('category_name=Destacadas&showposts=4'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <a href="<?php the_permalink() ?>">
        <div class="item">
            <div class="contBajdaDestacados" id ="contBajdaDestacados"><?the_excerpt();?></div>
            <img style="width:740px; height:416px;" src="<? echo the_post_thumbnail($medium);?>" 
        </div>
    </a> 
	<?php endwhile; ?>
	</div>
</div>
</div><!--<div class="contSlider">-->
    <div class="contBajoSlide">
        <div class="contPodCastBajoSlide">
        <?php $my_query = new WP_Query('category_name=Podcast&showposts=2'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <div class="caratulaPodcast">
                <img style="width:330px; height:200px;" src=<? echo the_post_thumbnail($medium);?>
            </div>
            
        <?php endwhile; ?>
        </div>
<!--PUBLICIDAD-->
            <!--============= BLOQUE ROB HOME 1===================-->
        <div class="publicidad_dfp banner-top-1" id ="banner-rob-1">
                    <!-- <div
                        class="coop_blockSlot"
                        id="coop_d_990x90_01_1"
                        data-adunit='coop_d_990x90_01_1'
                        data-slot="/1020719/coop_d_990x90_01"
                        data-dimensions="4"
                        >
                    </div> -->

            <ins class="adsbygoogle"
                style="display:inline-block;width:300px;height:250px"
                data-ad-client="ca-pub-2652935048962050"
                data-ad-slot="3090151860">
            </ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
                    <!--============= /BLOQUE ROB HOME 1===================--> 
                <!--/PUBLICIDAD-->
</div>

<div class="contFull" id="portada-superior">
	
	<div class="contNoticias" id="contNoticias">

        <?php $my_query = new WP_Query('category_name=Noticias&showposts=6');?>      
        <?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
	
		<div class="contNoticia" id="contNoticia">
			<a href="<?php the_permalink() ?>">
                <div class="contNomCategoria" id="contNomCategoria">
                    <?php
                        $categoria = get_the_category();
                        $parent = get_cat_name($categoria[1]->category_parent);
                    if (!empty($parent)) {
                        echo $parent;
                    } else {
                        $nomSubCat = $categoria[0]->cat_name;
                        echo "<p>$nomSubCat</p>" ;
                    }
                    ?>
                </div>
                    
                <div class="contImagenNoticia">
                    <? the_post_thumbnail($medium); ?>
                </div>
                <div class="contTituloNoticia"><?php the_title(); ?></div>
                <div class="contBajadaNoticia"> <?the_excerpt(); ?><p1> >Leer Más </p1></div>
		</a>
	</div>
    <?php endwhile; ?>
</div>
	<?php get_sidebar('sidebar'); ?>
</div>

<!--PUBLICIDAD-->
            <!--============= BLOQUE TOP HOME 2===================-->
            <div class="publicidad_dfp banner-top-2" id ="banner-top-2">
              
                    <div
                        class="coop_blockSlot"
                        id="coop_d_990x90_01_1"
                        data-adunit='coop_d_990x90_01_1'
                        data-slot="/1020719/coop_d_990x90_01"
                        data-dimensions="4"
                        >
                    </div>
                
            </div>
            <!--============= /BLOQUE TOP HOME 2===================--> 
        <!--/PUBLICIDAD-->
<div class="contLogos">
	<div class="contImagen" id="Imagen2"><a href="https://www.shazam.com/es" target="_blank"><img width=150px height="55px" src="/wp-content/themes/colEsperanza/images/shazam-white.svg" title="shazam" ></a></div>
	 <div class="contImagen" id="Imagen3"><a href="https://soundcloud.com/radio-supernova-148002910" target="_blank"><img width=150px height="55px" src="/wp-content/themes/colEsperanza/images/soundcloud-1.svg" title="soundcloud" ></a></div>
	<div class="contImagen" id="Imagen4"><a href="https://www.instagram.com/radio_supernovafm/" target="_blank"><img width=150px height="55px" src="/wp-content/themes/colEsperanza/images/Instagram.svg" title="instagram" ></a></div>
</div>

<div class="contFull" id="portada-podcast">
	<h1> Podcast </h1>
	<div class="contNoticias" id="contNoticias">

<?php $my_query = new WP_Query('category_name=Podcast&showposts=6');?>
          
	<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
	
		<div class="contNoticia" id="contNoticia">
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
			<div class="contBajadaNoticia"> <?the_excerpt(); ?><p1> >Leer Más </p1></div>
		</a>
		
		</div>
		
        <?php endwhile; ?>
		</div>
<!--PUBLICIDAD-->
    <!--============= BLOQUE ROB HOME 1 ===================-->
    <div class="publicidad_dfp robExp" id ="robExp" >
            <div
                class="coop_blockSlot"
                id="coop_d_990x90_01_1"
                data-adunit='coop_d_990x90_01_1'
                data-slot="/1020719/coop_d_990x90_01"
                data-dimensions="4"
                style='display: table;margin: 20px auto 20px auto;'>
            </div>
    </div>
    <!--============= /BLOQUE ROB HOME 1 ===================--> 
<!--/PUBLICIDAD-->
</div>

<!--PUBLICIDAD-->
            <!--============= BLOQUE TOP HOME 3===================-->
            <div class="publicidad_dfp banner-top-3" id ="banner-top-3">
              
                    <div
                        class="coop_blockSlot"
                        id="coop_d_990x90_01_1"
                        data-adunit='coop_d_990x90_01_1'
                        data-slot="/1020719/coop_d_990x90_01"
                        data-dimensions="4"
                        >
                    </div>
                
            </div>
            <!--============= /BLOQUE TOP HOME 3===================--> 
        <!--/PUBLICIDAD-->

<div class="contFull" id="portada-staff">
	<h1> Staff </h1>
	<div class="contNoticias" id="contNoticias">

    <?php $my_query = new WP_Query('category_name=Portada-Staff&showposts=1');?>      
	<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
	
		<div class="contNoticia" id="contNoticia">
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
			<div class="contBajadaNoticia"> <?the_excerpt(); ?><p1> >Leer Más </p1></div>
		</a>
		
		</div>
    <?php endwhile; ?>

    <div class="contImagenStaff">
        <img src="https://www.radiosupernova.cl/wp-content/uploads/2021/01/IMG_1976-FONDO-TRANSPARENTE-ESTE-SI-2.png" alt="Nuestro equipo" width="640" height="370">
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



  