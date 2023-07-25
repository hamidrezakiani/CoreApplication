<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h1>Login</h1>
        </div>
        <div class="row">
           <div class="col-3"></div>
           <div class="col-6">
                @if($errors->has('email'))
               <h5 class="text-danger">{{$errors->first('email')}}</h5>
               @endif
               <form action="{{url('/login')}}" method="POST">
                   @csrf
                   <div class="form-group m-3">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter email...." name="email" id="email" class="form-control" value="{{old('email')}}">
                   </div>
                   <div class="form-group m-3">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter password...." name="password" id="password" class="form-control">
                   </div>
                   <div class="form-group m-3">
                       <button type="submit" class="btn btn-primary">Login</button>
                   </div>
               </form>
           </div>
           <div class="col-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>