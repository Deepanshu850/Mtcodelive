<div class="tableOfContent">
    <div class="header" onclick="">
        <p id="fake-heading">
            Table of Content
        </p>
        <button id="toggleButton">
            <i class="bi bi-list"></i>
        </button>
    </div>
    <div class="content open">
        <a href="#heading-1">
            1. Property in Noida - Brief Description
        </a>
        <a href="#heading-2">
            2. How to buy Property in Noida?
        </a>

        <a href="#heading-3">
            3. Types of Real Estate investment in Noida
        </a>
        <a href="#heading-4">
            4. Where to buy Property in Noida?

        </a>
        <a href="#heading-5">
            5. Tired of looking to buy Property in Noida?

        </a>
        <a href="#heading-6">
            6. Tired of looking at Property for Sale on Dwarka Expressway

        </a>
        <a href="#heading-7">
            7. How to invest in Real Estate?

        </a>
        <a href="#heading-8">
            8. Looking to Invest in Real Estate in India?

        </a>
        <a href="#heading-9">
            9. Frequently Asked Questions

        </a>




    </div>
</div>



<style>
    .blog-carousel {
        overflow: auto;
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
        position: relative;
        padding-bottom: 3rem;
    }

    .blog-carousel::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari and Opera */
    }

    .blog-carousel .swiper-slide h3 {
        font-size: 18px;
    }

    .blog-carousel .swiper-slide img {
        object-fit: fill;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 30px;
        font-weight: 600;
    }

    .swiper-button-prev,
    .swiper-button-next {
        top: 35%;
        color: #000000;
        background-color: rgba(255, 255, 255, 0.4);
        border: 1px solid #000000;
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
    }

    .swiper-pagination-bullet-active {
        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
    }
</style>


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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.blogSwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                // when window width is >= 700px
                700: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }
            }
        });
    });
</script>






<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/elan-group" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/godrej-properties" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/l-t-realty" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/m3m-group" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/mahagun-group" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/migsun-group" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/paras-buildtech" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/piramal-realty" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/sikka-group" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/the-house-of-abhinandan-lodha" title="">


    </a>
</li>
<li class="lpage">
    <a href="https://moneytreerealty.com/real-estate-developers/devika-group" title="">


    </a>
</li>



