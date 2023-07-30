@extends('layouts.client')
<div class="register-box m-4">
    @section('content')
        <!-- /.login-logo -->
        <div class="">
            <div class="container">
                <div class="row d-block py-2">
                    <div class="d-flex justify-content-between text-dark">
                        <div class="col-md-6 text-center "><a href="mailto:contact@buscarapp.net" class="top-pane text-danger">Email Us: contact@buscarapp.com </a></div>
                        <div class="col-md-6 text-center"><a href="tel:+233 303976395
                            " class="top-pane text-danger">Call / Whatsapp: 0303976395
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                     <img class="mb-2" src="{{asset('Asset4.png')}}" alt="" width="200">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/#pos-features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/#pos-pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("client.create") }}"
                            class="nav-link text-dark">Request Demo</a></li>
                        <!-- Support Link -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown"
                                aria-expanded="false">Support</a>
                             <div class="dropdown-menu">
                                <a class="dropdown-item text-warning" href="#">Action</a>
                                <a class="dropdown-item text-warning" href="#">Another action</a>
                                <a class="dropdown-item text-warning" href="#">Something else here</a>
                            </div> -->
                        </li>
                    </ul>
                    <div class="text-end">
                       <button type="button" class="w-100 btn btn-lg   head-color"
                            onclick="window.location.href='https://pos.buscarapp.net/login';">Login</button>
                        <!-- <button type="button" class="btn btn-warning text-white" onclick="window.location.href='https://pos.buscarapp.net/register';">Register</button> -->
                    </div>

                </div>
            </nav>
        </div>
        <div class="container-sm col-md-6 border-none p-4 shadow">
            <div>
                <h2 class="display-5">Request Buscar App Demo Form</h2>
            </div>
            <form class="row g-4" action="/client" method="POST">
                @csrf
                @method('POST')
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label ">First Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="first_name" />
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label ">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="last_name" />
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" />
                </div>
                <div class="col-md-12">
                    <label for="">Telephone Number</label>
                    <div class="input-group my-4">
                        <!-- <div class="input-group-text">
                                        <select class="form-select" name="cty-code" aria-label="Default select example">
                                            <option selected>Country</option>
                                            <option value="1">+233</option>
                                            <option value="2">+234</option>
                                            <option value="3">+223</option>
                                        </select>
                                    </div> -->
                        <input type="tel" class="form-control" placeholder="541267920" name="phone_number"
                            aria-label="Input for number">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputBusinessName" class="form-label">Business Name</label>
                    <input type="text" class="form-control" name="business_name" id="inputBusinessName" />
                </div>
                {{-- <div class="col-md-6">
                    <label for="inputBusinessType" class="form-label">Business Type</label>
                    <input type="text" class="form-control" name="business_type" id="inputBusinessType" />
                </div> --}}
                <div class="col-md-4">
                    <label for="inputPackage" class="form-label">Select Package</label>
                    <select id="inputPackage" name="package" class="form-select">
                        <option value="1">Standard</option>
                        <option value="2">Business</option>
                        <option value="3">Enterprise</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="inputCity" />
                </div>
                <div class="col-md-12">
                    <label for="note">Note</label>
                    <textarea name="note" id="note" class="form-control h-5">

              </textarea>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-lg btn-dark text-white">Request</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.login-box -->
@endsection
