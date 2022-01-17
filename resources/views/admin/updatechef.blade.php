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

        <!-- updating chef from here starts from here -->

        <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label >
                   Chef Name
                </label>
                <input style="color: blue;" type="text" name="name" value="{{$data->name}}">
            </div>

            <div>
                <label >
                   Speciality
                </label>
                <input style="color: blue;" type="text" name="speciality" value="{{$data->name}}">
            </div>
            <div>
                <label >
                   Old Image
                </label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}" alt="chef image">
            </div>

            <div>
                <label >
                   New Image
                </label>
                <input type="file" name="image">
                
            </div>
            <div>
                <input style="color: blue;" type="submit" value="Update Chef" required>
            </div>
            
            
        </form>
        <!-- updating chef ends here -->
    </div>
    @include("admin.adminscript")
</body>

</html>