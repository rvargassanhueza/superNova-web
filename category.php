<?php
//     if (is_category('Noticias'))  {include(TEMPLATEPATH  .'/category-1.php');
//     elseif{
//         if (is_category('Regionales')) {include(TEMPLATEPATH  .'/category-2.php');}else{
//             if (is_category('CentrodeChile')) {include(TEMPLATEPATH  .'/category-3.php');}else{
//                 if (is_category('Espectaculos')) {include(TEMPLATEPATH  .'/category-4.php');}else{
//                     if (is_category('Nacionales'))  {include(TEMPLATEPATH  .'/category-5.php');}else{
//                         if (is_category('Podcast'))  {include(TEMPLATEPATH  .'/category-6.php');}else{
//                             if (is_category('Panoramas'))  {include(TEMPLATEPATH  .'/category-7.php');}
//                         }
//                     }
//                 }
//             }
//         }
//     }    
// }
    // if (is_category('Noticias'))  {echo "soy Noticias"; include(TEMPLATEPATH  .'/category-1.php');}
    // if (is_category('Regionales')) {echo "soy Regionales"; include(TEMPLATEPATH  .'/category-2.php');}
    // if (is_category('CentrodeChile')) {echo "soy CentrodeChile"; include(TEMPLATEPATH  .'/category-3.php');}
    // if (is_category('Espectaculos')) {echo "soy Espectaculos"; include(TEMPLATEPATH  .'/category-4.php');}
    // if (is_category('Nacionales'))  {echo "soy Nacionales"; include(TEMPLATEPATH  .'/category-5.php');}
    // if (in_category(7))  {echo "soy Podcast"; include(TEMPLATEPATH  .'/category-6.php');}
    // if (is_category('Panoramas'))  {echo "soy Panoramas"; include(TEMPLATEPATH  .'/category-7.php');}

                $categoria = get_the_category();
                $parent = get_cat_name($categoria[0]->category_parent);
                $nomCat = $categoria[0]->cat_name;
                echo $nomCat;
                // if(is_category($nomCat)){
                // echo "soy: ".$nomCat;

                // }
                switch ($nomCat) {
                    case "Noticias":
                        // echo "i es una manzana";
                        include(TEMPLATEPATH  .'/category-1.php');
                        break;
                    case "Regionales":
                        // echo "i es una barra";
                        include(TEMPLATEPATH  .'/category-2.php');
                        break;
                    case "CentrodeChile":
                        // echo "i es un pastel";
                        include(TEMPLATEPATH  .'/category-3.php');
                        break;
                    case "Espectaculos":
                            // echo "i es un pastel";
                        include(TEMPLATEPATH  .'/category-4.php');

                        break; 
                    case "Nacionales":
                            // echo "i es un pastel";
                        include(TEMPLATEPATH  .'/category-5.php');

                        break; 
                    case "Podcast":
                            // echo "i es un pastel";
                        include(TEMPLATEPATH  .'/category-6.php');

                            break; 
                    case "Panoramas":
                            // echo "i es un pastel";
                        include(TEMPLATEPATH  .'/category-6.php');

                            break;

                }



  ?>