<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="header">



        <div class="logo">
            <img src="./assets/img/logo.png" alt="" loading="lazy">
        </div>


        <form class="search-form" action="" method="GET">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>



        <ul class="headerNav">
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>+91-9732300007</li>
        </ul>




    </header>


    <style>
        body {
            background: pink;
        }

        .header {
            display: flex;
            outline: 2px solid red;
            position: sticky;
            top: 10vh;
            width: 90%;
            border-radius: 50px;
            margin-inline: auto;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .headerNav {
            display: flex;
        }


        .header .logo {}

        .header .logo img {
            height: 70px;
            aspect-ratio: 2/1;
        }
    </style>











</body>

</html>