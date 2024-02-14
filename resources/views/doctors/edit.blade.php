<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Doctor List</h3>
    </div>

    <div class="container">
        <form method="post" action="{{ route('doctor.update') }}">
            @csrf
            <input type="text" name="id" value="{{ $data->id }}">
            <div class="form-group mt-3">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $data->name }}">
            </div>

            <div class="form-group mt-3">
                <label for="">Phone</label>
                <input class="form-control" type="text" name="phone" value="{{ $data->phone }}">
            </div>

            <div class="form-group mt-3">
                <label for="">Email</label>
                <input class="form-control" type="text" name="email" value="{{ $data->email }}">
            </div>

            <div class="form-group mt-3">
                <label for="">Categrory</label>
                <input class="form-control" type="text" name="category" value="{{ $data->category }}">
            </div>
            <button class="btn btn-sm btn-primary mt-4" >UPDATE</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>