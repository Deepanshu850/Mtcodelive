

// faq toggle logic

document.addEventListener("DOMContentLoaded", function () {
  const faqs = document.querySelectorAll(".faq");

  faqs.forEach((faq) => {
    faq.addEventListener("click", function () {
      const answer = faq.querySelector(".answer");
      const arrow = faq.querySelector(".arrow");

      if (answer.style.display === "block") {
        answer.style.display = "none";
        arrow.classList.remove("expanded");
        arrow.classList.add("collapsed");
      } else {
        answer.style.display = "block";
        arrow.classList.remove("collapsed");
        arrow.classList.add("expanded");
      }
    });
  });
});
