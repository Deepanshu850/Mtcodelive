
// table of content toggle js
document.getElementById("toggleButton").addEventListener("click", function () {
  var contentDiv = document.querySelector(".tableOfContent .content");
  contentDiv.classList.toggle("open");
});



// faq dropping js 


 $(document).ready(function () {
   $(".faq h3").click(function () {
     $(this).next(".answer").slideToggle();
     $(this).parent().find(".arrow").toggleClass("collapsed expanded");
   });
 });

  
//  latest blog swiper side bar


document.addEventListener("DOMContentLoaded", function () {
  const posts = [
    {
      id: 10,
      title: "Top 10 upcoming expressways of India",
      description:
        "Infrastructure in India is rapidly growing with many expressways of India coming up and various commercial property, residential property,  and plots for sale emerging as a high - value real estate investment in India.",
      imageUrl: " ./assets/top-10-expressway-thumbnail.jpeg",
      date: "December 10, 2023",
    },
    {
      id: 12,
      title:
        "Migsun Nehru Place 1 Luxury Studio Apartments on Yamuna Expressway",
      description:
        "Migsun Group provides a vast and diverse portfolio of commercial and residential projects with over 2 cr of sq ft of area delivered and under construction.This real estate company continuously strives to reimagine the real estate industry in India with their projects that feature a global outlook.",
      imageUrl: " ./assets/migsun-blog-thumbnail.jpg",
      date: "June 6, 2024",
    },
    {
      id: 13,
      title: "Biggest Airports in India",
      description:
        "With the rise in tourism and rapid urbanisation in India, the Government of India formulated a standard plan to enhance the aviation industry with plans to initiate the biggest airports in India spread across the nation. IGI Airport, Chhatrapati Shivaji Maharaj International Airport, Rajiv Gandhi International Airport, Cochin International Airport are some of the biggest airports in India.",
      imageUrl: " ./assets/biggest-airport-image1.jpeg",
      date: "June 14, 2024",
    },
    {
      id: 15,
      title: "How to buy Property in Noida | Moneytree Realty",
      description:
        "The Real Estate Industry in India is blooming at an exponential rate and currently contributes about 14% to the country’s GDP. Property investment has emerged as a prominent option for wealth creation in India along with various other perks like high capital appreciation, competitive rental yields, and hedging against inflation.",
      imageUrl: " ./assets/how-to-buy-property-in-noida.jpeg",
      date: "June 19, 2024",
    },
    {
      id: 16,
      title: "Dwarka Expressway | Gurgaon Real Estate",
      description:
        "Dwarka Expressway, also known as Northern Peripheral Road, stretches over 27.1 km long and connects Dwarka in Delhi to Kherki Daula Toll Plaza in Gurgaon. It consists of an elevated 8-lane along with an 8-lane service road, making it a total 16-lane elevated highway in India.",
      imageUrl: " ./assets/dwarka-expressway-gurgaon-real-estate.jpeg",
      date: "June 26, 2024",
    },
  ];

  const container = document.getElementById("blog-posts-container");

  function titleToSlug(title) {
    return title
      .toLowerCase()
      .replace(/ /g, "-")
      .replace(/[^\w-]+/g, "");
  }

  posts.forEach((post) => {
    const slide = document.createElement("div");
    slide.className = "swiper-slide";
    const postUrl = `./${titleToSlug(post.title)}.php`; // Adjusted for .php and blog folder
    slide.innerHTML = `
            <div class="widget-cnt">
                <div class="wi">
                    <a href="${postUrl}"><img src="${post.imageUrl}" alt="${post.title} image"></a>
                </div>
                <div class="wc">
                    <a class="date" href="${postUrl}">${post.date}</a>
                    <h6><a href="${postUrl}">${post.title}</a></h6>
                </div>
            </div>
        `;
    container.appendChild(slide);
  });
});

//pop up image 
document.addEventListener("DOMContentLoaded", function () {
  var modals = document.querySelectorAll(".popup");
  var imgs = document.querySelectorAll(".image-wrapper img");
  var modalImgs = document.querySelectorAll(".popup-content");
  var spans = document.querySelectorAll(".close");

  imgs.forEach((img, index) => {
    img.addEventListener("click", function () {
      modals[index].style.display = "flex";
      modalImgs[index].src = this.src;
    });
  });

  spans.forEach((span, index) => {
    span.addEventListener("click", function () {
      modals[index].style.display = "none";
    });
  });

  window.addEventListener("click", function (event) {
    modals.forEach((modal, index) => {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  });

  modalImgs.forEach((modalImg) => {
    var startX,
      startY,
      initialScale = 1,
      scale = 1,
      lastTouchEnd = 0;

    modalImg.addEventListener("touchstart", function (e) {
      if (e.touches.length === 2) {
        startX = (e.touches[0].clientX + e.touches[1].clientX) / 2;
        startY = (e.touches[0].clientY + e.touches[1].clientY) / 2;
        initialScale = scale;
      }
    });

    modalImg.addEventListener("touchmove", function (e) {
      if (e.touches.length === 2) {
        e.preventDefault();
        var deltaX = e.touches[0].clientX - e.touches[1].clientX;
        var deltaY = e.touches[0].clientY - e.touches[1].clientY;
        var distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
        var initialDistance = Math.sqrt(startX * startX + startY * startY);
        scale = initialScale * (distance / initialDistance);
        modalImg.style.transform = `scale(${scale})`;
      }
    });

    modalImg.addEventListener("touchend", function (e) {
      var now = new Date().getTime();
      if (now - lastTouchEnd <= 300) {
        e.preventDefault();
        if (scale > 1) {
          scale = 1;
        } else {
          scale = 2;
        }
        modalImg.style.transform = `scale(${scale})`;
      }
      lastTouchEnd = now;
    });
  });
});
