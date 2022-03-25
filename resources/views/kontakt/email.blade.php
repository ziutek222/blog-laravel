<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
</head>
<body>
        <div class="emailcontent">
                    <h1>Nowa wiadomosc od:</h1> <br>
                    <h2>{{ $data['name'] }}</h2> <br>
                    <h2>{{ $data['email'] }}</h2>
                    <h3>Tresc Wiadomosci:</h3>
                    <div class="wiad">
                        {{ $data['message'] }}
                    </div>
        </div>
</body>
</html>