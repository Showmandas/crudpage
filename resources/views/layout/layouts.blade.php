<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('/js/fontawesome-free/css/all.min.css')}}">
   <link href="{{asset('files/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>
<body>
    <div>
    @yield('content')
    </div>
    <input type="text"  id="indexLink" value="{{route('index')}}" hidden >

    <script src="{{asset('files/jquery/jquery.min.js')}}"></script>


    <script src="{{asset('files/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>

  <script src="{{asset('/js/bootstrap.min.js')}}"></script>  
</body>
</html>