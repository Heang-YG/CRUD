<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
    <div class="container">
        <h2>Update Student</h2>
        <form method="post" action="{{url('update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$data -> id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{$data->name}}" class="form-control w-50" id="exampleFormControlInput1" placeholder="your name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" name="email" value="{{$data->email}}" class="form-control w-50" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone</label>
                <input type="text" name="phone" value="{{$data->phone}}" class="form-control w-50" id="exampleFormControlInput1" placeholder="phone number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Address</label>
                <input type="text" name="address" value="{{$data->address}}" class="form-control w-50" id="exampleFormControlInput1" placeholder="address">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm w-50">Update</button>
        </form>
    </div>
</body>
</html>