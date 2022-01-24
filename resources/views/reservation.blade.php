<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <style>
        #lst {
  background-color: black;
  color: wheat;
}
    </style>
</head>

<body>
    <br><br><br>
    <h1 style=" border-style: groove; text-align: center;
            background-color: black;">BOOK &nbsp; A &nbsp; TABLE </h1>

    <div class="row d-flex justify-content-center">
        <!-- heading with image -->
        <div class="col-7 ">
            <center><br><br><br><br><br><br>
                <h2><strong>Let us serve you better</strong></h2>
                <h5>&nbsp;&nbsp;Don't wait in a line to enjoy your meal.<br />
                    Reserve a table in advance with us.
                </h5><br><br><br><br><br>
                <img src="images/booktable.jfif" alt="Table Book"><br><br><br>
            </center>
        </div>
        <!-- form section -->
        <div class="col-4">
            <form action="{{url('reservation')}}" method="post">
                @csrf
                <br><br>
                <label for="name">
                    <h5>Name:</h5>
                </label><br>
                <input style="background-color: lightyellow;" type="text" name="name" id="name" placeholder="Name"> &nbsp;&nbsp;

                <br><br>
                <label for="email">
                    <h5>Email:</h5>
                </label><br>
                <input style="background-color: lightyellow;" type="email" name="email" id="email" placeholder="@email.com"> <br><br>
                <label for="phone">
                    <h5>Contact Number: </h5>
                </label><br>
                <input style="background-color: lightyellow;" type="text" name="phone" id="phone" placeholder="Phone Number">
                <br><br>
                <label for="guest">
                    <h5>Number of Guests:</h5>
                </label><br>
                <input style="background-color: lightyellow;" type="number" name="guest" id="guest" placeholder="number of guest">
                <br><br>

                <label for="date">
                    <h5>Date: </h5>
                </label><br>
                <input style="background-color: lightyellow;" type="date" name="date" id="date"> <br><br><br>
                <label for="time">
                    <h5>Time:</h5>
                </label><br>
                <input style="background-color: lightyellow;" type="time" name="time" id="time">
                <br><br>
                <label for="message">
                    <h5>Message:</h5>
                </label><br>
                <textarea name="message" id="message">Enter text here ...</textarea> <br><br>
                <button type="submit" id="lst">Book Table</button> <br>

            </form>
        </div>
    </div>




</body>

</html>