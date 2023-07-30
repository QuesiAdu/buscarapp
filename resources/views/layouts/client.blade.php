<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <title>Buscar POS</title>
    <link rel="shortcut icon" href="./src/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/sass/app.scss')
</head>
<body>
<div class="min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
</div>

<footer class="p-3 pt-md-5 border-top dark-gh">
    <div class="row mx-sm-auto text-center">
        <div class="col-sm-12 col-md">
            <img class="mb-2" src="{{asset('Asset4.png')}}" alt="" width="200">

            <small class="d-block mt-3 text-body-secondary">Design By DoveagSolutions © 2017-2023</small>

       <!-- <div class="col-6 col-sm-12 col-md">
            <h5 class="head-color">Features</h5>
            <ul class="list-unstyled text-small">

            </ul>
        </div>
        <div class="col-6 col-sm-12 col-md">
            <h5 class="head-color">Resources</h5>
            <ul class="list-unstyled text-small">

            </ul>
        </div>
        <div class="col-6 col-sm-12 col-md">
            <h5 class="head-color">About</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="text-dark text-decoration-none" href="#">Privacy</a></li>
                <li class="mb-1"><a class="text-dark text-decoration-none" href="#">Terms</a></li>
            </ul>
        </div> -->
    </div>

    </div>
    <div class="row d-block py-2 ">
        <div class="d-flex justify-content-between text-light">
            <div class="col-md-6 text-center "><a href="mailto:contact@buscarapp.net" class="top-pane">Email Us: contact@buscarapp.com </a>
            </div>
            <div class="col-md-6 text-center text-dark"><a href="tel:+233 303976395
                "class="top-pane">Call / Whatsapp: 0303976395
                </a>
            </div>
        </div>
</footer>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
</body>
</html>
