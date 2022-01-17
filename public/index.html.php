<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style/style.css">
  <!-- <script src="https://unpkg.com/scrollreveal@4.0.0-beta.6"></script>
        <script src="js/restaurent.js"></script> -->

  <title>Home</title>
  <style>
    .navigation-bar {
      background-color: #333;
      border-bottom: 1px solid #BBBBBB;
      border-top: 1px solid #BBBBBB;

    }



    .nav-link {
      font-weight: bold;
      font-size: 14px;
      text-transform: uppercase;
      text-decoration: none;

      color: wheat;
      padding: 20px 0px;
      margin: 0px 20px;
      display: inline-block;
      position: relative;
      opacity: 0.75;
    }

    .nav-link:hover {
      opacity: 1;
      color: wheat;
    }

    .nav-link::before {
      transition: 300ms;
      height: 5px;
      content: "";
      position: absolute;
      background-color: whitesmoke;
    }

    .nav-link-ltr::before {
      width: 0%;
      bottom: 10px;
    }

    .nav-link-ltr:hover::before {
      width: 100%;
    }

    .rounded-circle {
      width: 3rem;
      height: 3rem;
    }

    .logo {
      font-size: 1px;
      font-family: Helvetica, sans-serif;
      /* height: 0.01rem; */
      transition: transform .2s;
      margin-left: 5rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .logo:hover {
      transform: scale(1.5);
    }
  </style>
</head>

<body>
  <header>
    <div class="navigation-bar  ">
      <a class="navbar-brand logo float-md-start mb-0" href="{{URL('index')}}"> <img src="images/logo.gif" class="img-fluid rounded-circle" alt="LOGO"> </a>
      <div class="navbar nav justify-content-end ">
        <a class="nav-link nav-link-ltr" href="{{URL('home')}}"> <i class="fa fa-fw fa-home"></i>&nbsp; Home</a>
        <a class="nav-link nav-link-ltr" href="{{URL('about')}}"> <i class="far fa-address-card"></i>&nbsp; About</a>
        <a class="nav-link nav-link-ltr" href="{{URL('contact')}}"> <i class="fa fa-fw fa-envelope"></i>&nbsp;Contact</a>
        <a class="nav-link nav-link-ltr" href="{{URL('menu')}}"> <i class="fas fa-pizza-slice"></i>&nbsp;Menu Cart</a>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
          <x-app-layout>

          </x-app-layout>

          @else
          <a class="nav-link nav-link-ltr" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-sign-in-alt"></i>&nbsp;Log in</a>

          @if (Route::has('register'))
          <a class="nav-link nav-link-ltr" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-user-plus"></i>&nbsp;Register</a>
          @endif
          @endauth
        </div>
        @endif
        </li>

      </div>
    </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  @yield('content')
</body>

</html>