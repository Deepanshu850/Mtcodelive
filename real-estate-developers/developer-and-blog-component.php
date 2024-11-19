 <h2>Explore other Real Estate Builders </h2>

 <?php
    include '../data/developerslogodata.php';

    ?>

 <div class="developers">
     <div class="developers-list">
         <?php foreach ($developerLogos as $developer) : ?>

             <div class="developer-item">
                 <a href="">
                     <img src="../<?php echo $developer['src']; ?>" alt="<?php echo $developer['alt']; ?>">
                 </a>
             </div>
         <?php endforeach; ?>
     </div>
 </div>


 <h2>Check out Latest Blogs on the Real Estate Market </h2>

 <?php
    include '../data/blogdata.php';
    $posts = array_reverse(array_slice($posts, -5));
    ?>

 <div class="blog-carousel">
     <div class="swiper-container blogSwiper">
         <div class="swiper-wrapper">
             <?php foreach ($posts as $post): ?>
                 <div class="swiper-slide">
                     <div class="blog-post">

                         <img src="../blog/<?php echo $post['imageUrl']; ?>" alt="<?php echo $post['title']; ?>">
                         <h3><?php echo $post['title']; ?></h3>

                     </div>
                 </div>
             <?php endforeach; ?>
         </div>
         <!-- Add Pagination -->
         <div class="swiper-pagination"></div>
         <!-- Add Arrows -->
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
     </div>
 </div>