<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/explore.css" rel="stylesheet">
</head>

<body>
    @include('includes.nav')
    
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                @include('includes/explore_active_tab')
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <div style="width: 100%;">
        <img src="./Pictures/bg-01.png" alt="Logo">
    </div>
    <div class="container" style="width:100%">
        @yield('content')
    </div>
</body>

</html>