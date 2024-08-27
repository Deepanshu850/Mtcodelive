// Function to fetch JSON data and populate the div
function loadJsonData() {
  // Fetch the JSON data
  fetch("propertydata.json")
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
      // Get the div with id 'cards'
      const cardsDiv = document.getElementById("cards");



      // Iterate over the data and create list items
      data.data.forEach((item) => {
        const div1 = document.createElement("div");
        const div2 = document.createElement("div");
        div1.className = "col-lg-4 wow fadeInUp";
        div2.className = "post-box";

        const figure = document.createElement("figure");
        const img = document.createElement("img");
        img.src = item.images[0];
        img.alt = item.name;
        figure.appendChild(img);

        const span = document.createElement("span");
        span.textContent = item.location;

        const h6 = document.createElement("h6");
        const a = document.createElement("a");
        a.href = "#";
        a.textContent = item.name;
        h6.appendChild(a);

        // const p = document.createElement("p");
        // p.textContent = item.description;

        div2.appendChild(figure);
        div2.appendChild(h6);
        div2.appendChild(span);
        // li.appendChild(p);
        
        div1.appendChild(div2);
        cardsDiv.appendChild(div1);
      });

   
    })
    .catch((error) => console.error("Error fetching JSON data:", error));
}

// Load the JSON data once the DOM is fully loaded
document.addEventListener("DOMContentLoaded", loadJsonData);


