<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
    <link rel="stylesheet" href="{{ asset('css/kontakt.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <header>@include('navbar')</header>
  <div class="container mt-4">
      <form action="{{ route('sendEmail') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Twoje imie:</label>
              <input type="text" name="name" class="form-control" placeholder="Wprowadz swoje imie">
            </div>
          </div>
          <div class="col-md-6">
            <label for="email">Adres E-mail:</label>
            <input type="text" name="email" class="form-control" placeholder="Wprowadz swoj E-mail">
          </div>
          <div class="form-group my-2">
            <label for="message">Twoja Wiadomosc:</label>
            <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Wprowadz swoja wiadomosc"></textarea>
          </div>
          <input type="submit" value="Send" class="btn btn-primary">
        </div>
      </form>
  </div>
  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d624.9097302188658!2d16.161581729226718!3d51.20730473893231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f129ac41be1dd%3A0x14abc24e8a69efba!2sPomnik%20Jana%20Paw%C5%82a%20II!5e0!3m2!1spl!2spl!4v1647523506500!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <footer>@include('footer')</footer>
</body>
</html>