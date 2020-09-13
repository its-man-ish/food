<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
  <div class="bg text-center mt-10">
     
      
       <h1>FoodyNinjas</h1> 

     
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">FoodyNinjas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">More</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
         
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
      <div class="background">
          <div class="container">
            
          
          

          <!--gallary-->
          
          <div class="slideContainer">
          

      
      <div class="tagline text-center">
        <h2>
          Find Healthy And <span style="color: yellow; font-family: 'Kaushan Script', cursive;">Tasty <br>Foods</span> Near You
      </h2>
      </div>  
            <div class="Slide">
            <img src="food/chineese.jpg">
            <div class="Caption">Chinese</div>
            </div>
            <div class="Slide">
            <img src="food/japan.jpg" />
            <div class="Caption">Japanese</div>
            </div>
            <div class="Slide">
            <img src="food/western.jpg" />
            <div class="Caption">Western</div>
            </div>
            <div class="Slide">
                <img src="food/western.jpg" />
                <div class="Caption">Photo 3</div>
                </div>
            <a class="prevBtn">❮</a>
            <a class="nextBtn">❯</a>
            </div>
            <br />
            <div style="text-align:center">
            <span class="Navdot" onclick="currentSlide(1)"></span>
            <span class="Navdot" onclick="currentSlide(2)"></span>
            <span class="Navdot" onclick="currentSlide(3)"></span>
            <br>
            <br>
            <button type="button" class="btn btn-warning">Order Now</button>
         <br>
         <br>
           


          
            </div>
            <form>
              <div class="form-group">
              
                <input type="email" class="form-control" id="emal" aria-describedby="emailHelp" placeholder="Enter email">
              
              </div>
              <div class="form-group">
              
                <input type="password" class="form-control" id="email" placeholder="Password">
              </div>
             
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
            
        
      </div>
      </div>
      <script>
        document.querySelector(".prevBtn").addEventListener("click", () => {
           changeSlides(-1);
        });
        document.querySelector(".nextBtn").addEventListener("click", () => {
           changeSlides(1);
        });
        var slideIndex = 1;
        showSlides(slideIndex);
        function changeSlides(n) {
           showSlides((slideIndex += n));
        }
        function currentSlide(n) {
           showSlides((slideIndex = n));
        }
        function showSlides(n) {
           var i;
           var slides = document.getElementsByClassName("Slide");
           var dots = document.getElementsByClassName("Navdot");
           if (n > slides.length) {
              slideIndex = 1;
           }
           if (n < 1) {
              slideIndex = slides.length;
           }
           Array.from(slides).forEach(item => (item.style.display = "none"));
           Array.from(dots).forEach(
              item => (item.className = item.className.replace(" selected", ""))
           );
           slides[slideIndex - 1].style.display = "block";
           dots[slideIndex - 1].className += " selected";
        }

        
        </script>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>