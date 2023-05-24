@extends('layouts.app')

<!-- Add your home page content here -->
@section('content')


<div class="container-fluid bg-light">
    <h1 class="text-center display-3 text-uppercase text-danger fw-bold mb-5">Still working in this page !!!</h1>

    <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
            <div class="row">
                <div class="col-sm-1"></div>



                <div class="col-sm-9">

                    <h1 style="color: #333; font-size: 30px; margin-bottom: 20px;">
                        <b><label>Hi there! <br> Welcome to Rare Forest   </label> </b>
                    </h1>
                    <h6>Here you will find everthing you looking for your pet</h6>

                    <a href="{{ route('animal') }}" class="btn btn-primary" style="background-color: #ff9800; border-color: #ff9800;">Shop Now</a>
                </div>


                <div class="col-sm-2"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <img src="img/aa.jpg" alt="Image" height="600" style="width: 300;">
        </div>
    </div>
</div>

    


@endsection
