<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sankyu Coding Test</title>

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
            .color_black{
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="padding-top: 5em;">
                <div class="title m-b-md">
                    Sankyu Coding Test
                </div>

                <h2 style="padding-left: 5em;padding-right: 5em;">The task require you to create simple TODO web application using Laravel Framework that involve frontend and backend. This todo application involve multi user, allow user to register login and register. Each of the todo will have their level of urgency.</h2>
                <h1 style="color: black;padding-top: 1em;text-decoration: underline;">Details</h1>
                <div style="text-align: left;padding-left: 7em;padding-right: 7em;">

                    <h2>Task Duration : 1 Day</h2>
                    <h2><span class="color_black"> 1) Database</span> : Table related to authentication, 1 table to store TODO data, 1 data to store urgency todo type</h2>
                    <h2><span class="color_black"> 2) User Roles</span> : 2 roles, normal user and administrator. You are welcome to use other role & permission package if you want to do so, if not assume that user with id 1 is administrator.</h2>

                    <h2><span class="color_black"> 3) User Interface</span> : You allow to use any other HTML templates that will be bonus point and if you have more time. If not you can you default theme that provided by Laravel that use <a href="https://getbootstrap.com/">Boostrap</a>.</h2>

                    <h2><span class="color_black"> 4) Project Files </span>: You can directly use this template by download/clone it at Sankyu <a href="https://gitlab.com/">Gitlab</a>. This project file using Laravel version 5.8, you can refer the documentation at <a href="https://laravel.com/docs/5.8">Laravel</a></h2>

                    <h2><span class="color_black"> 5) Core Process</span> : You need to have CRUD(CREATE,READ,UPDATE,DELETE) things in your application and with the owner of todo.</h2>

                    <h2><span class="color_black"> 6) Laravel Feature </span> : You require to use atleast one <a href="https://laravel.com/docs/5.8/eloquent-relationships">Eloquent: Relationships</a>.</h2>

                    <h2><span class="color_black"> 7) Finishing Up</span> : Please upload your project file in your github/gitlab account and make it public, and reach us to check.</h2>

                </div>
                <h2 style="padding-left: 5em;padding-right: 5em;padding-top: 2em; padding-bottom: 5em;">We wish all the best & Please do your best !</h2>
            </div>
        </div>


                
    </body>
</html>
