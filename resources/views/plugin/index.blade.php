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
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Install new package</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                   <label for="package-name">Package name :</label>
                   <input type="text" class="form-control" id=package-name name="name" placeholder="vendor/package-name">
                </div>
                <div class="form-group m-3">
                  <label for="package-name text-danger" id="error"></label>
                  <label for="package-name text-success" id="success" style="display: none">Successful</label>
               </div>
              </div>
              <div class="modal-footer">
                <div class="col">
                  <div id="loading" style="display:none">
                    <div class="spinner-border mt-2 mr-3" role="status">
                    <span class="sr-only"></span>
                    </div>
                  <span class="text-success" style="margin-left:10px">Installing <span id="install-package"></span><br>
                    This action may take several minutes.</span>
                  </div>
                  <button class="btn btn-success" id="btn-install" type="submit">Install</button>
                
                  </div>  
              </div>
      </div>
    </div>
  </div>
        <div class="row mt-5 mb-3">
            <h1>Installed Plugins</h1>
        </div>
        <div class="row mb-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Install new package
              </button>
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
                     @if($key < sizeof($plugins)/2 )
                     <tr>
                      <td>{{sizeof($plugins)}}</td>
                      <td>{{$plugin->name}}</td>
                      <td>{{$plugin->version}}</td>
                      <td>{{$plugin->path}}</td>
                      <td style="display: flex;justify-content: center">
                         <button class="btn btn-danger uninstall" data-name="{{$plugin->name}}" data-search-name="{{str_replace('/','',$plugin->name)}}">Uninstall Plugin</button>

                            <div class="spinner-border mt-2 mr-3 loading" style="display:none" data-name="{{str_replace('/','',$plugin->name)}}" role="status">
                             <span class="sr-only"></span>
                             </div>

                      </td>
                   </tr>
                     @endif
                  @endforeach
               </tbody>
           </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
      $(document).on('click','#btn-install',function(){
        var packageName = $('#package-name').val();
        $('#btn-install').css('display','none');
        $('#loading').css('display','flex');
        $('#error').css('display','none');
        $('#error').html('');
        $('#install-package').html(packageName);
         $.ajax({
            type: "POST",
            url: "{{url('/api/plugins/install')}}",
            data: {
                'name':packageName
            },
            success: function (response) {
              $('#btn-install').css('display','block');
               $('#loading').css('display','none');
               $('#install-package').html('');
                if(response.status == "200" && response.code == 0)
                  {
                    $('#success').css('display','block');
                    location.reload();
                  }
                else
                {
                  $('#error').css('display','block');
                  $('#error').html('Execution Error!');
                }

            },
            error:function(error){
              $('#error').css('display','block');
              $('#error').html('Network Error!');
               console.log(error);
               $('#btn-install').css('display','block');
               $('#loading').css('display','none');
               $('#install-package').html('');
            }
         });
      });
    </script>
    <script>
       $(document).on('click','.uninstall',function(){
           var packageName = $(this).data('name');
           var packageNameSearch = $(this).data('search-name');
           $(this).css('display','none');
           $('.loading[data-name='+packageNameSearch+']').css('display','block');
           $.ajax({
            type: "POST",
            url: "{{url('/api/plugins/uninstall')}}",
            data: {
                'name':packageName
            },
            success: function (response) {
                if(response.status == "200" && response.code == 0)
                  {
                    location.reload();
                  }
                else
                {
                  $('.uninstall[data-search-name='+packageNameSearch+']').css('display','block');
                  $('.loading[data-name='+packageNameSearch+']').css('display','none');
                  alert('Execution Error!');
                }

            },
            error:function(error){
                $('.uninstall[data-search-name='+packageNameSearch+']').css('display','block');
                $('.loading[data-name='+packageNameSearch+']').css('display','none');
                alert('Network Error!');
            }
         });
       });
    </script>
</body>
</html>