<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Crud Student</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Student List</h2>
        <div class="list">
            <div class="add">
                <a class="btn btn-primary btn-sm" href="{{url('add')}}">Add New</a>
            </div>
            <table class="table w-75 mt-1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>            
                    @foreach ($data as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->phone}}</td>
                            <td>{{$stu->address}}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary btn-sm mr-1" href="{{url('edit-student/'.$stu->id)}}">Update</a>
                                <form action="{{ url('students', [$stu->id] )}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm" href="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>