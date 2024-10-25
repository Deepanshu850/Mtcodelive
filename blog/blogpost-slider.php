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