@extends('layouts.guest')
<div class="register-box m-4">
    <div class="register-logo text-center">
        <img class="mb-2" src="{{ asset('resources/images/Asset4.png') }}" alt="" width="200" />
    </div>

    @section('content')
        <!-- /.login-logo -->
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
