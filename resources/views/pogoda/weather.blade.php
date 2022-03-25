<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/weather.css') }}">
</head>
 
<body>
    <header>@include('navbar')</header>
    <div class="pawel">
        <h1>
            Pogoda tego typu
        </h1>
    </div>
    <div class="weatherWidget">
    </div>
    <script>
        window.weatherWidgetConfig = window.weatherWidgetConfig || [];
        window.weatherWidgetConfig.push({
            selector: ".weatherWidget",
            apiKey: "DRP7RYNDLK7HQVGAG9S4N6RTJ", 
            location: "Legnica, PL", 
            unitGroup: "metric", 
            forecastDays: 5, 
            title: "Pogoda Legnica",  
            language: "pl",
            showTitle: true,
            showConditions: true
 
        });
 
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://www.visualcrossing.com/widgets/forecast-simple/weather-forecast-widget-simple.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <footer>@include('footer')</footer>
</body>
 
</html>