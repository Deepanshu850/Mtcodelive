<h2>Explore other Real Estate Builders </h2>

<?php
include '../data/developer-data.php';
?>

<div class="developer-carousel">
    <div class="swiper-container developerSwiper">
        <div class="swiper-wrapper">
            <?php foreach ($developers as $developer): ?>
                <div class="swiper-slide">
                    <a href="../real-estate-developers/<?php echo $developer['link']; ?>">
                        <div class="developer-card">
                            <div class="developer-image">
                                <img src="../assets/img/developer-logos/<?php echo $developer['image']; ?>"
                                    alt="<?php echo $developer['name']; ?>"
                                    loading="lazy">
                            </div>
                            <h3><?php echo $developer['name']; ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
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