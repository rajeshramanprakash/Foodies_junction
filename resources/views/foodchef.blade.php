<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Staff</title>
   <style>
       .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container {
  margin-top: 15%;
}

.img-text {
  width: 100%;
  height: 300px;
  display: block;
  text-align: center;
  color: red;
  border-radius: 15px;
}

.img-text h2 {
  font-size: 25px;
  text-transform: uppercase;
  letter-spacing: 2px;

}

.img-text p {
  font-size: 14px;
}

.carousel-indicators {
  left: 0;
  top: auto;
  bottom: 2px;
}

.carousel-indicators li {
  background: 500;
  border-radius: 60%;
  width: 15px;
  height: 15px;
}

.carousel-indicators .active {
  background: black;

}
   </style>
</head>

<body>
    <!-- add chef -->
    <div class="container">
        <div class="row">



            @foreach($data2 as $data2)
            <div class="col-md-4">

                <div class="card">



                    <div class="img-text">
                        <img height="200" width="200" src="chefimage/{{$data2->image}}" alt="Chef" style="width:100%">
                        <h2>{{$data2->name}}</h2>
                        <span>{{$data2->speciality}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>



    </div>
    <!-- add chef end here -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
</body>

</html>