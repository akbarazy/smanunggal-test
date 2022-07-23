<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 KLAPANUNGGAL</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Comfortaa:wght@300;400;600;700&family=Mulish:wght@300;400;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,700&family=Questrial&family=Quicksand:wght@300;400;600;700&family=Rajdhani:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="static/css/priority-style.css">
    <link rel="stylesheet" href="static/css/index-style.css">
</head>

<body>
    <!-- header section -->

    <div class="header bg-white border-bottom fixed-top py-3" id="header">
        <div class="container text-break">
            <a href="index.php" class="title-header nav-link">SMAN 1 KLAPANUNGGAL</a>
        </div>
    </div>

    <!-- end header -->


    <!-- navbar section -->

    <nav class="navbar navbar-expand bg-white fixed-bottom p-0" id="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExample02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link navbar-links pt-2 pb-1 px-3 text-center navbar-home" href="#">
                        <i class="fa fa-home fa-size-1" aria-hidden="true"></i>
                        <p class="nav-text mb-0">Home</p>
                        <p class="nav-hover">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-links pt-2 pb-1 px-3 text-center text-break" href="#">
                        <i class="fa fa-users fa-size-2" aria-hidden="true"></i>
                        <p class="nav-text mb-0">Organization</p>
                        <p class="nav-hover">Organization</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-links pt-2 pb-1 px-3 text-center">
                        <i class="fa fa-picture-o fa-size-3" aria-hidden="true"></i>
                        <p class="nav-text mb-0">Facility</p>
                        <p class="nav-hover">Facility</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-links pt-2 pb-1 px-3 text-center">
                        <i class="fa fa-newspaper-o fa-size-4" aria-hidden="true"></i>
                        <p class="nav-text mb-0">News</p>
                        <p class="nav-hover">News</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-links pt-2 pb-1 px-3 text-center navbar-me">
                        <img src="images/icon.svg" alt="icon" class="icon">
                        <p class="nav-text mb-0">Me</p>
                        <p class="nav-hover">Me</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end navbar -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        const navbarLinks = document.querySelectorAll(".navbar-links");
        console.log(navbarLinks);
        navbarLinks.forEach(function(navbarLinks) {
            console.log(navbarLinks);
            navbarLinks.addEventListener("mouseover", function(event) {
                const navHover = navbarLinks.lastElementChild;
                navHover.style.opacity = "1";
            });
            navbarLinks.addEventListener("mouseout", function(event) {
                const navHover = navbarLinks.lastElementChild;
                navHover.style.opacity = "0";
            });
        });
    </script>
</body>

</html>