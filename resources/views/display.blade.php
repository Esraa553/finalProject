
<!DOCTYPE HTML
<html>

<head>
    <title>profile page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>profile page ||  <a href="logout.php">LogOut</a> <a href="LogIn.php">LogIn</a>  </h1>

        </div>
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
            <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                @foreach ($data as $row)
            </tr>

            <tr>
            <td> {{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td> {{$row->email}}</td>
                <td> {{$row->address}}</td>
                <td> {{$row->city}}</td>
            @endforeach
        </table>
    </div>
</body>
</html>