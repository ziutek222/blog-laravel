<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kawka z tigerem</title>
    <link rel="stylesheet" href="{{ asset('css/blog2.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,375;1,480&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Rubik:ital,wght@1,375;1,480&display=swap" rel="stylesheet">
</head>
<body>
    <header>@include('navbar') </header>

    <div class="gory">
        <h1>Kawka z tigerem</h1>
    </div>
    <div class="posty">
        <h5>@foreach ($Blogs1 as $Blog1)
            {!! $Blog1['wpis'] !!}
        @endforeach</h5>
        <img src="{{ asset('images/kot.png') }}" alt="" width="30%" height="30%">
    </div>
<footer>@include('footer')
</footer>



</body>
</html>