<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>EDIT</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('Update-List')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-lebel">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name"
                            value="{{$data->Name}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Enter Description"
                            value="{{$data->Description}}">
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Enter Category"
                            value="{{$data->Category}}">
                        @error('category')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Unit</label>
                        <input type="text" class="form-control" name="unit" placeholder="Enter Unit"
                            value="{{$data->Unit}}">
                        @error('unit')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Value</label>
                        <input type="text" class="form-control" name="value" placeholder="Enter Value"
                            value="{{$data->Value}}">
                        @error('unit')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        </textarea>
                    </div><br>
                    <button type="submit" class="btn btn primary">Submit</button>
                    <a href="{{url ('PList')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>


</body>

</html>