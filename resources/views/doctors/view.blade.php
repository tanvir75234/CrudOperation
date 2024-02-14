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
    <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <table class="table table-bordered table-striped table-hover custom_view_table">
                        <tr>
                          <td>Doctor Name</td>  
                          <td>:</td>  
                          <td>{{ $data->name }}</td>  
                        </tr>
                        <tr>
                          <td>Doctor Phone numberr</td>  
                          <td>:</td>  
                          <td>{{ $data->phone }}</td>  
                        </tr>
                        <tr>
                          <td>Doctor Email</td>  
                          <td>:</td>  
                          <td>{{ $data->email }}</td>  
                        </tr>
                        <tr>
                          <td>Doctor Category</td>  
                          <td>:</td>  
                          <td>{{ $data->category }}</td>  
                        </tr>
                        <tr>
                          <td>Updated At</td>  
                          <td>:</td>  
                          <td>{{ $data->updated_at }}</td>  
                        </tr>
                        <tr>
                          <td>Created At</td>  
                          <td>:</td>  
                          <td>{{ $data->created_at }}</td>  
                        </tr>
                    
                      </table>
                  </div>
                  <div class="col-md-2"></div>
              </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>       
</body>
</html>