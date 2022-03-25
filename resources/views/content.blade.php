<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="content1">
            <div class="con1txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor felis a nulla porta porta. Pellentesque non fringilla turpis. Donec varius sagittis velit, ut imperdiet risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec odio quam, iaculis sit amet nisl vitae, feugiat imperdiet justo. Aenean vel leo eu dui ultricies iaculis. Mauris tempus lectus et ante sodales, vel ullamcorper massa cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dictum nisi.
            </div>

            <div class="con1img">
                <img src="{{ asset('images/rzeka.jpg') }}" alt="">
            </div>
    </div>

    <div class="content2">
        <div class="con2txt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor felis a nulla porta porta. Pellentesque non fringilla turpis. Donec varius sagittis velit, ut imperdiet risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec odio quam, iaculis sit amet nisl vitae, feugiat imperdiet justo. Aenean vel leo eu dui ultricies iaculis. Mauris tempus lectus et ante sodales, vel ullamcorper massa cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dictum nisi.
        </div>

        <div class="con2img">
            <img src="{{ asset('images/dom.jpg') }}" alt="">
        </div>
    </div>

    <div class="content3">
        <div class="con3txt">
            @foreach ($posts3 as $post3)
            {!! $post3['body'] !!}
        @endforeach
        </div>

        <div class="con3img">
            <img src="{{ asset('images/most.jpg') }}" alt="">
        </div>
    </div>

</body>
</html>