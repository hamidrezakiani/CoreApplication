<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>installed plugins</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h1>Installed Plugins</h1>
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
                  @foreach ($plugins as $key => $plugin)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$plugin->name}}</td>
                         <td>{{$plugin->version}}</td>
                         <td>{{$plugin->path}}</td>
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