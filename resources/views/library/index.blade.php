<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>installed libraries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h1>Installed Libraries</h1>
        </div>
        <div class="row p-2">
           <table class="table table-bordered">
               <thead class="table-dark">
                  <tr>
                      <th>index</th>
                      <th>name</th>
                      <th>version</th>
                      <th>path</th>
                      <th>operations</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($libraries as $key => $library)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$library->name}}</td>
                         <td>{{$library->version}}</td>
                         <td>{{$library->path}}</td>
                         <td>operations</td>
                      </tr>
                  @endforeach
               </tbody>
           </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>