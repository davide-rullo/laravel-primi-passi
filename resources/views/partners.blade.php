<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .navbar {
            font-size: 1.5rem;

        }

        #navbarNavAltMarkup {
            justify-content: center;
        }

        .circle {
            aspect-ratio: 1/1;
            border-radius: 100%;
            width: 200px;
        }

        .col {
            display: flex;
            justify-content: center;
        }

        footer {
            margin-top: 300px;
            background-color: black;
        }

        ul {}
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid ">
                <a class="navbar-brand " href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link " href="{{ route('about') }}">About</a>
                        <a class="nav-link active" href="{{ route('partners') }}">Partners</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="title text-center p-5">
        <h1>Our partners</h1>
    </div>
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>
            <div class="col">
                <img src="https://picsum.photos/200/300" class="circle" alt="">
            </div>


        </div>
    </div>

    <footer>
        <div class="container text-white p-5">
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled">
                        <li>
                            <h3>Contacts</h3>
                        </li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-unstyled">
                        <li>
                            <h3>Contacts</h3>
                        </li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-unstyled">
                        <li>
                            <h3>Contacts</h3>
                        </li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>