<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href={{ asset('assets/style.css') }}>
    </head>

    <body>
        <header>
        <div class="contianer">
            <div class="col-md-12">
                <div class="row navbar">
                        <div class="col-md-3 logo">
                            <h5> S-M-S</h5>
                        </div>
                    @yield('navbar')
                </div>
            </div>
        </div>
        </header>
