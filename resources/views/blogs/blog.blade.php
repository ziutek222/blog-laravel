<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Blogow</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=Inspiration&family=League+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <header>@include('navbar')</header>
        <div class="contentblog">
            <h1>Najnowsze Wpisy</h1>
            <a href="/blog1" target="_blank">
                <div class="blog1">
                <img src="images/kawusia.jpg" alt="" width="50%" height="200px">
                <p>@foreach ($Blogs1 as $Blog1)
                    {!! $Blog1['tytul'] !!}
                @endforeach</p>
                @foreach ($Blogs1 as $Blog1)
                    {!! $Blog1['podtytul'] !!}
                @endforeach
                <h3>Czytaj więcej</h3>
            </div></a>
            <a href="/blog2" target="_blank">
            <div class="blog1">
                <img src="images/wycieczka.jpg" alt="" width="50%" height="200px">
                <p>@foreach ($Blogs2 as $Blog2)
                    {!! $Blog2['tytul'] !!}
                @endforeach</p>
                @foreach ($Blogs2 as $Blog2)
                    {!! $Blog2['podtytul'] !!}
                @endforeach
                <h3>Czytaj więcej</h3>
            </div></a>
            <a href="/blog3" target="_blank">
            <div class="blog1">
                <img src="images/bieg.jpg" alt="" width="50%" height="200px">
                <p>@foreach ($Blogs3 as $Blog3)
                    {!! $Blog3['tytul'] !!}
                @endforeach</p>
                @foreach ($Blogs3 as $Blog3)
                    {!! $Blog3['podtytul'] !!}
                @endforeach
                <h3>Czytaj więcej</h3>
            </div></a>
            <a href="/blog4" target="_blank">
            <div class="blog1">
                <img src="images/ptak.jpg" alt="" width="50%" height="200px">
                <p>@foreach ($Blogs4 as $Blog4)
                    {!! $Blog4['tytul'] !!}
                @endforeach</p>
                @foreach ($Blogs4 as $Blog)
                    {!! $Blog4['podtytul'] !!}
                @endforeach
                <h3>Czytaj więcej</h3>
            </div></a>
        </div>
    <footer>@include('footer')</footer>
</body>
</html>