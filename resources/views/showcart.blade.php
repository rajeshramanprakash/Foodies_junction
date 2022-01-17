<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Home</title>

</head>

<body>
    <header>
        <div style="justify-content: space-evenly;" class="navigation-bar  ">
            <a class="navbar-brand logo float-md-start mb-0" href="{{URL('index')}}"> <img src="images/logo.gif" class="img-fluid rounded-circle" alt="LOGO"> </a>
            <div class="navbar nav justify-content-end ">
                <a class="nav-link nav-link-ltr" href="{{URL('home')}}"> <i class="fa fa-fw fa-home"></i>&nbsp; Home</a>
                <a class="nav-link nav-link-ltr" href="{{URL('about')}}"> <i class="far fa-address-card"></i>&nbsp; About</a>

                <a class="nav-link nav-link-ltr" href="{{URL('contact')}}"> <i class="fa fa-fw fa-envelope"></i>&nbsp;Contact</a>
                <li class="nav-link nav-link-ltr"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    @auth
                    <a href="{{url('/showcart',Auth::user()->id)}}">
                        Cart{{$count}}
                    </a>
                    @endauth
                    @guest
                    Cart[0]
                    @endguest
                </li>
                <a class="nav-link nav-link-ltr" href="{{URL('menu')}}"> <i class="fas fa-pizza-slice"></i>&nbsp;Menu Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @if (Route::has('login'))
                <div style="margin-left:-3rem;" class="hidden  nav-link nav-link-ltr  right-0 px-1 py-3 sm:block ">
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


    </header>
    <div>
        <table align="center" bgcolor="yellow">

            <tr>

                <th style="padding:30px;">Food Name</th>
                <th style="padding:30px;">Price</th>
                <th style="padding:30px;">Quantity</th>
                <th style="padding:30px;">Action</th>

            </tr>
            <form action="{{url('orderconfirm')}}" method="POST">
                @csrf

                @foreach($data as $data)
                <!-- added product in cart display here -->
                <tr align="center">

                    
                    <td>
                        <input type="text" name="foodname[]" value="{{$data->title}}" hidden>
                        {{$data->title}}
                    </td>
                    <td>
                        <input type="text" name="price[]" value="{{$data->price}}" hidden>
                        {{$data->price}}
                    </td>
                    <td>
                        <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden>
                        {{$data->quantity}}
                    </td>


                </tr>
                <!-- added product ends here -->
                @endforeach

                @foreach($data2 as $data2)
                <!-- remove product from cart -->
                <tr style="position: relative; top:-60px; right:-360px">
                    <td>
                        <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a>
                    </td>
                </tr>
                <!-- remove product from the cart ends here -->

                @endforeach

        </table>

        <div align="center" style="padding: 10px
        ;">
            <button id="order" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <!-- this section will display after placing order for extra information -->
        <div id="appear" align="center" style="padding: 10px; display:none;">
            <div style=" padding: 10px;">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>

            <div style="padding: 10px;">
                <label>Table No.</label>
                <input type="number" name="table" placeholder="Table no.">
            </div>

            <div style="padding: 10px;">
                <label>Mobile No.</label>
                <input type="number" name="phone" placeholder="Mobile No.">
            </div>

            <div style="padding: 10px;">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
            </div>

            <div style="padding: 10px;">
                <input class="btn btn-success" type="submit" value="Order Confirm!">
                <button type="button" id="close" class="btn btn-danger">Close</button>
            </div>
        </div>
        <!-- extra inforamtion section ends here -->

    </div>
    </form>
    <!-- script for displaying the section after order -->

    <script type="text/javascript">
        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('content')
</body>

</html>