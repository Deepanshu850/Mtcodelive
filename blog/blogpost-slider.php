<div class="single-widgets widget_egns_recent_post mb-20">
    <div class="widget-title blog-title mb-20">
        <h6>Recent Properties</h6>
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
            </div>
            <div class="slider-btn next-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
            </div>
        </div>
    </div>
    <?php include '../data/tempdata.php'; ?>

    <div class="recent-post-wraper">
        <div class="swiper recent-post-sidebar-slider">
            <div class="swiper-wrapper" id="blog-posts-container">
                <?php foreach ($properties as $post): ?>
                    <?php $postUrl = '../propertydetail/' . $post['link']; ?>
                    <div class="swiper-slide">
                        <div class="widget-cnt">
                            <div class="wi">
                                <a href="<?= $postUrl; ?>"><img class="mpmpmp" src="../<?= $post['images'][1]; ?>" alt="<?= $post['name']; ?> image"></a>
                            </div>
                            <div class="wc">
                                <h6><a class="page-title" href="<?= $postUrl; ?>"><?= $post['name']; ?></a></h6>
                            </div>
                            <div class="card-grid">
                                <div>
                                    <p>Location</p>
                                    <p><?php echo $post['location'][1]; ?></p>
                                </div>
                                <div>
                                    <p>Pincode</p>
                                    <p><?php echo $post['location'][2]; ?></p>

                                </div>
                                <div>
                                    <p>Price</p>
                                    <p><?php echo $post['price']; ?></p>
                                </div>
                                <div>
                                    <p>Type</p>
                                    <p>
                                        <?php foreach ($post['type'] as $type): ?>
                                            <span>
                                                <?php echo $type; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </p>
                                </div>
                                <div>
                                    <p>Rera</p>
                                    <p><?php echo $post['rera'][0]; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="single-widgets widget_egns_recent_post mb-20">
    <div class="widget-title blog-title mb-20">
        <h6>Recent Blog</h6>
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
            </div>
            <div class="slider-btn next-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="recent-post-wraper">
        <div class="swiper recent-post-sidebar-slider">
            <div class="swiper-wrapper" id="blog-posts-container">
                <!-- Dynamic content will be inserted here -->

                <?php include '../data/blogdata.php';

                function formatTitle($title)
                {
                    $title = preg_replace('/[^a-zA-Z0-9\s]/', '', $title);
                    $title = preg_replace(
                        '/\s+/',
                        ' ',
                        trim($title)
                    );
                    $formattedTitle = str_replace(
                        ' ',
                        '-',
                        strtolower($title)
                    );
                    return $formattedTitle;
                }

                $randomKeys = array_rand($posts, 3);
                $randomPosts = array_map(function ($key) use ($posts) {
                    return $posts[$key];
                }, $randomKeys);

                ?>


                <?php foreach ($randomPosts as $post): ?>
                    <?php $postUrl = './' . formatTitle($post['title']); ?>
                    <div class="swiper-slide">
                        <div class="widget-cnt">
                            <div class="wi">
                                <a href="<?= $postUrl; ?>"><img class="mpmpmp" src="<?= $post['imageUrl']; ?>" alt="<?= $post['title']; ?> Banner"></a>
                            </div>
                            <div class="wc">
                                <h6><a class="page-title" href="<?= $postUrl; ?>"><?= $post['title']; ?></a></h6>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>