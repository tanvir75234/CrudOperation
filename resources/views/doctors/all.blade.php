<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>All Doctor</h3>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-lg btn-primary" href="{{ route('doctor.add') }}">Add Doctor</a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Updated At</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($data as $data)
                <tbody>
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Manage
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ url('dashboard/doctor/view/'.$data->id) }}">View</a></li>
                                    <li><a class="dropdown-item" href="{{ url('dashboard/doctor/edit/'.$data->id) }}">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>       
</body>
</html>