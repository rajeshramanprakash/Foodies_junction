<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <!-- updating added food starts from here -->

        <div style="position: relative ; top:60px; right:-150px; ">
            <form action="{{url('/uploadfood',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <pre><label for="">Title</label>: <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required></pre>
                        </div>
                        

                        <div class="col">
                            <pre><label for="">Price</label>: <input style="color:blue; " type="num" name="price" value="{{$data->price}}" required></pre>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <pre><label for="">Description</label>: <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required></pre>
                        </div> 
                        <br>
                        <div class="col">
                            <pre><label for="">Old Image</label> 
                            <img height="200" width="200" src="/foodimage/{{$data->image}}"></pre>

                        </div>

                        <div class="col">
                            <pre><label for="image"> New Image</label>: <input type="file" name="image"  required></pre>
                            
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <center><input style="color:black" type="submit" value="  Save  "></center>
                        </div>
                    </div>
                </div>


                


                

               
                
            </form>
        </div>
        <!-- updating food ends here -->
        @include("admin.adminscript")
</body>

</html>