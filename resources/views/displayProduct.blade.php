
<!DOCTYPE HTML
<html>

<head>
    <title>profile page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1> Show Product </h1>
        </div>
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Details</th>
                <th>Action</th>
                @foreach ($data as $row)
            </tr>

            <tr>
                <td> {{$row->id}}</td>
                <td>{{$row->product}}</td>
                <td> {{$row->details}}</td>
                <td><a href=" {{ url('/delete/'.$row['id']) }} "> deleteItem </a>
                <a href=" {{ url('/showProduct/'.$row['id']) }} "> || showItem </a></td>
            </tr> 
            @endforeach
        </table>

    </div>
</body>
</html>

   
   
  
   

