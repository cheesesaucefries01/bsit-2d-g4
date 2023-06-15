<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>PET LIST</h2>
                <div style="right-margin:8px">
                    <a href="{{url('Add-List')}}">Add</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{session::get('success')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Unit</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $Pet)
                        <tr>
                            <td>{{$Pet->Name}}</td>
                            <td>{{$Pet->Description}}</td>
                            <td>{{$Pet->Category}}</td>
                            <td>{{$Pet->Unit}}</td>
                            <td>{{$Pet->Value}}</td>
                            <td><a href="{{url('edit-List/'.$Pet->id)}}">Edit</a> |><a
                                    href="{{url('delete-List/'.$Pet->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>