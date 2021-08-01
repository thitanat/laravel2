<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('includes/nav')
    
    <div class="container">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
            @include('includes/dashboard_active_tab')
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 2%;">
        <div class="row">
            <div class="col-sm-2">
                @include('layouts/sidebar')
            </div>
            <div class="col-sm-8">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>