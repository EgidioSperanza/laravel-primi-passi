<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
            }
            .container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .links{
                margin-top: 40px;
            }
            .links>a{
                margin: 20px;
            }
            a:link, a:visited{
                color: #FFF;
                text-decoration: none;
                background-color: steelblue;
                padding: 3px 5px;
                border-radius: 5px;
            }
            a:hover{
                background-color: #636b6f;
            }
            .about{
                margin-top:20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>{{$title}}</h1>
            <h2>{{$subtitle}}</h2>
            <div class="about">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cupiditate repudiandae possimus voluptate nemo quasi praesentium, recusandae nesciunt! Sed, rerum fugit? Illum voluptatem corrupti maiores quae quis ipsam nostrum quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cupiditate repudiandae possimus voluptate nemo quasi praesentium, recusandae nesciunt! Sed, rerum fugit? Illum voluptatem corrupti maiores quae quis ipsam nostrum quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cupiditate repudiandae possimus voluptate nemo quasi praesentium, recusandae nesciunt! Sed, rerum fugit? Illum voluptatem corrupti maiores quae quis ipsam nostrum quod.</p>
            </div>
            <div class="links">
                @foreach($links as $text_link=>$url_link)
                <a href="{{$url_link}}">{{$text_link}}</a>
                @endforeach
            </div>
        </div>
    </body>
</html>
