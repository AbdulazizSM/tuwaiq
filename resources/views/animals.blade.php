@extends('layouts.app')

<!-- Add your home page content here -->
@section('content') 

  {{-- <div class="container bg-white d-flex flex-column align-items-center">
      <div class="row">
        <div class="col-sm-1"></div>
    
        <div class="col-sm-10">
          @foreach ($animals as $item)
            <div class="row">
              <div class="col-md-6">
                <div class="card border mt-2 rounded">
                  <img src="img/{{$item['imge']}}" alt="Animal Image" style="object-fit: cover; height: 300px;">
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border mt-2 rounded">
                  <div class="card-body">
                    <h4 class="card-title"><span class="badge bg-danger">{{$item['Name']}}</span></h4>
                    <p class="card-text">Color: Rainbow</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    
        <div class="col-sm-1"></div>
      </div>
    </div> --}}

<div class="bg-light">
  <div class="container">
    <h1 class="text-center display-3 text-uppercase text-danger fw-bold mb-5">Rare Pets</h1>
    

    @foreach ($animals as $item)
    <div class="card mt-2">
      <div class="row g-0">
        <div class="col-md-4 d-flex align-items-center border-end">
          <div class="image-container">
            <img src="img/{{$item->img}}" alt="Animal Image" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-6 border-end">
          <div class="card-body">
            <h3 class="card-title"><span class="badge bg-danger">{{$item->Name}}</span></h3>
            <p class="card-text">{{$item->Description}}</p>
          </div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
          <div class="card-body">
            <div class="text-center">
              <h3 class="price">{{$item->Price}}</h3>
<a class='btn btn-success' href="{{ route('checkout', ['id' => $item->id]) }}">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach


    
    

    
    
    
    



  </div>
</div>


    



            {{-- <div class="col">
                <div class="card border" style="width: 25rem;">
                    <img src="img/macaw.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                      <h5 class="card-title "> 
                        <b> Macaw Parrot </b></h5>
                      <p class="card-text">
                        <h4>  health : good <br>
                        Color : Rainbow </h4></p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center p-2">
            <div class="col">
                <div class="card border" style="width: 25rem;">
                    <img src="img/macaw.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                      <h5 class="card-title "> 
                        <b> Macaw Parrot </b></h5>
                      <p class="card-text">
                        <h4>  health : good <br>
                        Color : Rainbow </h4></p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border" style="width: 25rem;">
                    <img src="img/macaw.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                      <h5 class="card-title "> 
                        <b> Macaw Parrot </b></h5>
                      <p class="card-text">
                        <h4>  health : good <br>
                        Color : Rainbow </h4></p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    
                    </div>
                </div>
            </div>
        </div> --}}

    

@endsection
