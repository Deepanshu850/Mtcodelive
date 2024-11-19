 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="./">

 </head>
 <body>
    <?php  include "./header.php" ?>




    <style>
  /* General Styles */
 

  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url('https://lh3.googleusercontent.com/p/AF1QipO6K8NjdcX1tHJYpAksB6sOvU24fVopaNxbD5q2=s1360-w1360-h1020') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
  }

  .search-bar-container {
    position: relative;
    z-index: 2000;
    width: 90%;
    max-width: 1000px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 30px 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    text-align: center;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
  }

  .search-bar-container h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
  }

  .search-bar-container p {
    font-size: 1rem;
    color: #ddd;
    margin-bottom: 20px;
  }

  .search-form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: space-between;
    align-items: center;
  }

  .form-group {
    flex: 1;
    min-width: 250px;
    position: relative;
  }

  .form-group input,
  .form-group select {
    width: 100%;
    padding: 15px 20px;
    font-size: 1rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-weight: bold;
  }

  .form-group input::placeholder,
  .form-group select {
    color: #ddd;
  }

  .form-group input:focus,
  .form-group select:focus {
    border: 2px solid #00aaff;
    background: rgba(255, 255, 255, 0.5);
    color: #333;
    box-shadow: 0 0 8px rgba(0, 170, 255, 0.5);
  }

  .form-group i {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #ddd;
    font-size: 1.2rem;
  }

  .search-btn {
    flex: 1;
    min-width: 150px;
    padding: 15px;
    font-size: 1.2rem;
    background: linear-gradient(135deg, #00aaff, #007bff);
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
    text-transform: uppercase;
  }

  .search-btn:hover {
    background: linear-gradient(135deg, #007bff, #0056b3);
    transform: translateY(-2px);
  }

  /* Mobile Responsiveness */
  @media (max-width: 768px) {
    .search-bar-container {
      padding: 20px;
    }

    .search-bar-container h1 {
      font-size: 2rem;
    }

    .search-btn {
      font-size: 1rem;
      padding: 12px;
    }

    .search-form {
      flex-direction: column;
    }
  }
</style>

<div class="hero-section">
  <div class="overlay"></div>
  <div class="search-bar-container">
    <h1>Find Your Dream Property</h1>
    <p>Search properties for sale, rent, or lease across top locations.</p>
    <form class="search-form">
      <!-- Location Input -->
      <div class="form-group">
        <input type="text" placeholder="Enter City, Location, or Project Name" required>
        <i class="fas fa-map-marker-alt"></i>
      </div>

      <!-- Property Type Dropdown -->
      <div class="form-group">
        <select required>
          <option value="" disabled selected>Select Property Type</option>
          <option value="residential">Residential</option>
          <option value="commercial">Commercial</option>
          <option value="plots">Plots</option>
        </select>
        <i class="fas fa-building"></i>
      </div>

      <!-- Budget Range -->
      <div class="form-group">
        <select required>
          <option value="" disabled selected>Select Budget</option>
          <option value="10">Up to ₹10 Lakh</option>
          <option value="50">₹10 - ₹50 Lakh</option>
          <option value="1cr">₹50 Lakh - ₹1 Crore</option>
          <option value="1cr+">Above ₹1 Crore</option>
        </select>
        <i class="fas fa-wallet"></i>
      </div>

      <!-- Search Button -->
      <button type="submit" class="search-btn">Search</button>
    </form>
  </div>
</div>





    <?php include "./footer.php" ?>
 </body>














    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
        <script src="assets/js/jquery-3.7.0.min.js" defer></script>
        <script src="assets/js/slick.js" defer></script>
        <script src="assets/js/waypoints.min.js" defer></script>
        <script src="assets/js/jquery.counterup.min.js" defer></script>
        <script src="assets/js/jquery.magnific-popup.min.js" defer></script>
        <script src="assets/js/jquery.marquee.min.js" defer></script>
        <script src="assets/js/jquery.nice-select.min.js" defer></script>
        <script src="assets/js/jquery.fancybox.min.js" defer></script>
        <script src="assets/js/custom.js" defer></script>
    
 </body>
 </html>