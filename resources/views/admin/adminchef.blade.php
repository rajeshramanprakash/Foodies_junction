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
        <!-- adding chef from here -->
        <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input style="color:blue;" type="text" name="name" required placeholder="Enter name">
            </div>

            <div>
                <label for="speciality">Speciality</label>
                <input style="color:blue;" type="text" name="speciality" required placeholder="Enter the Speciality">
            </div>

            <div>

                <input type="file" name="image" required>
            </div>
            <div>
                <input style="color:blue;" type="submit" value="Save">
            </div>
        </form>
        <!-- adding chef end here -->
        <!-- added chef will be display in admin pannel starts from here -->
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px;">Chef Name</th>
                <th style="padding: 30px;">Speciality</th>
                <th style="padding: 30px;">Image</th>
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Action 2</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100" width="100" src="/chefimage/{{$data->image}}" alt="Chef Image"></td>
                <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        <!-- added chef ends here -->


    </div>
    @include("admin.adminscript")
</body>

</html>