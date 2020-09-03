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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            nav {
              text-align: right;
            }
            nav ul {
              list-style: none;
              padding: 0;
            }
            header nav > ul li {
              display: inline-block;
              margin: 10px;
            }
            nav li a {
              text-decoration: none;
              color: #555;
            }
            nav li:hover a {
              text-decoration: underline;
            }
            nav .add-new-film {
              display: inline-block;
              padding: 8px 12px;
              background-color: #2196f3;
              color: white;
              margin-left: 10px;
              border-radius: 3px;
            }
            .container {
              max-width: 1170px;
              width: auto;
              margin: 0 auto;
            }

            .alert.alert-danger {
              color: red;
            }

            .movie-list-container {
              padding: 10px;
              margin-bottom: 40px;
              border: 1px solid #cacaca;
            }
            .movie-list-container .inline-form {
              display: inline-block;
            }
            .movie-list-container a.small-btn,
            .movie-list-container input[type="submit"].small-btn {
              display: inline-block;
              padding: 4px 7px;
              font: 400 1em 'Nunito', sans-serif;
              margin: 10px 10px 10px 0;
              background-color: #4fcc4f;
              color: #fff;
              border: none;
              text-decoration: none;
              border-radius: 3px;
            }
            .movie-list-container input[type="submit"].delete {
              background-color: #f72a2a;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        <main>
          @include('partials/header')

          @yield('content')
        </main>
      </div>
    </body>
</html>
