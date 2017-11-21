<?php

get_header(); ?>

<section>
         <!-- CAROUSEL -->  	
         <?php $d2e_theme->get_slider(); ?>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line">
               <h2>Some awesome blocks</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>
               <?php $d2e_theme->get_special_services(); ?>
               
            </div>
         </div>
         <!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1>Amazing title</h1>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <a class="button s-12 l-4 center" href="product.html">Read more</a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY --> 	
         <div id="third-block">
            <div class="line">
               <h2>Responsive gallery</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>

                  <?php $d2e_theme->get_gallery(); ?>
                  
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Amazing responsive template</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Responsive components</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Retina ready</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php get_footer();
