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
        <div class="container">

            <h1>Customer Orders</h1>
            <!-- search option starts from here -->
            <form action="{{url('/search')}}" method="get">
                <input type="text" name="search" style="color:blue;">
                @csrf
                <input type="submit" value="Search" class="btn btn-success">
            </form>
            <!-- search option ends here -->
            <!-- ordered food will display in admin pannel -->
            <table align="center">
                <tr>
                    <th style="padding: 30px;">Name</th>
                    <th style="padding: 30px;">Phone</th>
                    <th style="padding: 30px;">Table</th>

                    <th style="padding: 30px;">foodname</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Quantity</th>
                    <th style="padding: 30px;">Address</th>
                    <th style="padding: 30px;">Total Price</th>
                </tr>
                @foreach($data as $data)
                <tr align="center" style="background-color: black;">
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->table}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>₹{{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->address}}</td>
                    <td>₹{{$data->price * $data->quantity}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- ordered food ends here -->
    </div>
    @include("admin.adminscript")
</body>

</html>