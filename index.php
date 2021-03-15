<html>
    <head>
        <title>WoodTown</title>
        <link rel="icon" href="Images/logo.png" type="image/x-icon">
        <!-- <meta http-equiv="refresh" content="30"> -->
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">
        <!-- <script src="script.js"></script> -->
    </head>
    <div class="header-bar">
        
        <!-- <h2 class="right">Welcome to WoodTown</h2> -->
        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;  Menu</span>
    </div>
    
    <body>
        <div id="mySideNav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="products.html">View All Products</a>
            <a href="contact.html">Contact</a>
            <!-- <a href="">Search</a>
            <a href="">Filter</a> -->
            <a href="cart.html">My Cart</a>
            <a href="#bottom">Sign Up</a>
        </div>
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Images/3.png" style="width: 100%;">
                <!-- <div class="text">Caption</div> -->
            </div>
            <div class="mySlides fade">
                <img src="Images/1.png" style="width: 100%;">
                <!-- <div class="text">Caption</div> -->
            </div>
            <div class="mySlides fade">
                <img src="Images/2.png" style="width: 100%;">
                <!-- <div class="text">Caption</div> -->
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          <div class="title-box">
            <h1 style="color: white;">WoodTown</h1>
        </div>
        <div class="footer-bar" id="bottom" style="bottom:-40px;">
            <p>Enter your mail id to sign up for our mailing list for more offers!</p>
            <input id="email"type="email" placeholder="Enter your mail id"> 
            <button type="submit">Sign Up</button>
            <p style="position: relative;bottom: -20px;font-weight:bolder;color: white;">Copyright@WoodTown</p>
        </div>
    </body>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }

        function openNav() {
            document.getElementById('mySideNav').style.width = "250px";
            document.getElementById('main').style.width = "250px";
            console.log("Opened");
        }
        function closeNav(){
            document.getElementById('mySideNav').style.width = "0";
            document.getElementById('main').style.width = "0";
            console.log("Closed");
        }
    </script>
</html>
