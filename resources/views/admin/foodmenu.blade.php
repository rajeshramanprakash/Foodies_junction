<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")
        <!-- adding food menu starts from here -->
        <div style="position: relative ; top:60px; right:-150px; ">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <pre><label for="">Title</label>: <input width="1rem" style="color:blue;" type="text" name="title" placeholder="Write a title..." required></pre>
                        </div>
                        <div class="col">
                            <pre><label for="">Price</label>: <input style="color:blue; " type="num" name="price" placeholder="Price " required></pre>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <pre><label for="">Image</label>: <input type="file" name="image"  required></pre>
                        </div>
                        <div class="col">
                            <pre><label for="">Description</label>: <input style="color:blue;" type="text" name="description" placeholder="Description" required></pre>
                        </div> <br>

                    </div>
                    <div class="row">
                        <div class="col">
                            <center><input style="color:black" type="submit" value="  Save  "></center>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px;">Food Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Description</th>
                        <th style="padding: 30px;">Image</th>
                        <th style="padding: 30px;">Action</th>
                        <th style="padding: 30px;">Action 2</th>

                    </tr>
                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/foodimage/{{$data->image}}" height="200" width="200"></td>
                        <td><a href="{{url('deletemenu',$data->id)}}"> Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}"> Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <br>
            <hr>
            <br>
        </div>
        <!-- adding food menu ends here -->
        


    </div>
    @include("admin.adminscript")
</body>

</html>