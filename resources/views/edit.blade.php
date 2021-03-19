
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<form action =" {{ url('/editProduct') }} " method="Post">
<div class="container">
        <center>
        <h1> Edit Product </h1>
        </center>
</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="id" value="{{$data->id}}">

<label>Product Name</label>
<input placeholder="Enter Title" required value="{{$data->product}}" type="txt" class="form-control" name="title">
</br>

<label>Details of Product</label>
<textarea name="details" id="input" type="txt" class="form-control m-3 p-3" 
rows="3" cols="40" required="required"> {{$data->details}} </textarea>
</br>

<input type="submit" value="submit" name="btn" class="btn btn-success">

</form>
</body>
</html>