<!DOCTYPE html>
<html>

<head>
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card .btn {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card .btn:hover {
  opacity: 0.7;
}
</style>
</head>

<body>
    <br>
    <hr>
    <br>
    <!-- adding food  -->
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach($data as $data)
        <form action="{{url('/addcart',$data->id)}}" method="post">
            @csrf
            <div class="card">
                <img src="/foodimage/{{$data->image}}" alt="" style="width:100%">
                <h1 class="title">{{$data->title}}</h1>
                <div class="price">
                    <h6>{{$data->price}}</h6>
                </div>
                <p class="description">{{$data->description}}</p>
                <div class="btn">
                    <input type="number" name="quantity" min="1" value="1" style="width:80px">


                    <input type="submit" value="Add to plate">
                </div>
            </div>


        </form>
        @endforeach
<!-- adding food end here -->
    </div>





</body>

</html>