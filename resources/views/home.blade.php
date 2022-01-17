<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style/style.css">


  <title>Home</title>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>
  <header>
    <!-- navigation menu start -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand logo float-md-start mb-0" href="{{URL('index')}}">
          <img src="images/logo.gif" class="img-fluid rounded-circle" alt="LOGO">


        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0  ">
            <li class="nav-item ">
              <a class="nav-link nav-link-ltr   active" aria-current="page" href="{{URL('home')}}"><i class="fa fa-fw fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-ltr" href="{{URL('about')}}"> <i class="far fa-address-card"></i>&nbsp;About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-ltr" href="{{URL('contact')}}"><i class="fa fa-fw fa-envelope"></i>&nbsp;Contact</a>
            </li>
            <li class="nav-item">

              @auth
            <li class="nav-item">
              <a class="nav-link nav-link-ltr" href="{{url('/showcart',Auth::user()->id)}}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Cart{{$count}}

              </a>

              @endauth
            </li>
            @guest

            Cart[0]

            @endguest


            <li class="nav-item">
              <a class="nav-link nav-link-ltr" aria-current="page" href="{{URL('menu')}}"><i class="fas fa-pizza-slice"></i>&nbsp;Menu Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>

            <li class="nav-item">
              <a class="nav-link nav-link-ltr" href="{{URL('contact')}}"><i class="fas fa-user-tie"></i>&nbsp;User</a>
              <ul class="dropdown-menu">

                @if (Route::has('login'))
                <div class="hidden  nav-link nav-link-ltr  right-0 px-1 py-3 sm:block ">
                  @auth
                  <x-app-layout>

                  </x-app-layout>

                  @else

                  <li><a class="nav-link " aria-current="page" href="{{ route('login') }}">&nbsp;<i class="fas fa-sign-in-alt"></i>&nbsp;Log In</a></li>



                  @if (Route::has('register'))

                  <li><a class="nav-link " aria-current="page" href="{{ route('register') }}">&nbsp;<i class="fas fa-user-plus"></i>&nbsp;Register</a></li>


                  @endif
                  @endauth
                </div>
                @endif
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    <!-- navigation menu end here -->
    <div class="container-sm">
      <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel" padding="20px">
        <!-- indicators on the slide start from here -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>


        </div>
        <!-- indicators on the slide end here  -->
        <!-- items in slide starts from here -->
        <div class="carousel-inner" color="red">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1600x900/?food,tasty
                " class="d-block w-100" alt="North Indian Food">
            <div class="carousel-caption d-none d-md-block">
              <h5>Yummy Food</h5>
              <p>We have expert chief to cook your yummy food. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x900/?Smoothie,cold-drink
                " class="d-block w-100" alt="South Indian Food">
            <div class="carousel-caption d-none d-md-block">
              <h5>Beverage</h5>
              <p>We serve all the Beverage.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x900/?Room service,Hotel room
                " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Delux Room</h5>
              <p>We provide best room and services here.</p>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </header>
  @include("food")
  @include("reservation")
  @include("foodchef")

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  @yield('content')
</body>

</html>