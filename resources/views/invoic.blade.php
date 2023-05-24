@extends('layouts.app')
@section('title', 'invoice')
@section('content')

<div class="card">
    <div class="card-body mx-4">
        <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;">Thank you for your purchase</p>
            <div class="row">
                <ul class="list-unstyled">
                    <li class="text-black">{{$invoice->Name}}</li>
                    <li class="text-muted mt-1"><span class="text-black">Invoice</span> {{$invoice->InvoiceNumber}}</li>
                    <li class="text-black mt-1">{{date('F d, Y')}}</li>
                </ul>
                <hr>
                <div class="col-xl-10">
                    <p>{{$invoice->ProductName}}</p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end">${{$invoice->Total}}</p>
                </div>
                <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
                <div class="col-xl-12">
                    <p class="float-end fw-bold">Total: ${{$invoice->Total}}</p>
                </div>
                <hr style="border: 2px solid black;">
            </div>
            {{-- <div class="text-center" style="margin-top: 90px;">
                <a><u class="text-info">View in browser</u></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div> --}}
        </div>
    </div>
</div>

@endsection
