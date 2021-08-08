<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Vira</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/owl.css')}}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="http://localhost:8000/profile"><h2>Vira <em>Febrianti</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost:8000/beranda">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/profile">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Beranda</h2>
              <a href="{{ asset('style/products.html')}}">view all beranda <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Beranda</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_01.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Book</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_02.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Book</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_03.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Book</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_04.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Equipment</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_05.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Equipment</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{ asset('style/assets/images/team_06.jpg')}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Equipment</h4></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('style/assets/js/custom.js')}}"></script>
    <script src="{{ asset('style/assets/js/owl.j')}}"></script>
    <script src="{{ asset('style/assets/js/slick.js')}}"></script>
    <script src="{{ asset('style/assets/js/isotope.js')}}"></script>
    <script src="{{ asset('style/assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
