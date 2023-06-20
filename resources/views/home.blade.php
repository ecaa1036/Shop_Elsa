@extends('template')
@section('content')
<!-- Section-->
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-150" src="img/toko1.jpg" alt="..."  width="1200" height="400">
        </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="img/toko2.jpg" alt="..."  width="1200" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="img/toko3.jpg" alt="..."  width="1200" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="img/toko4.jpg" alt="..."  width="1200" height="400">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container pt-3">
<h3 class="fw-bold text-center">PRODUCTS</h3>
  <div class="row justify-content-center">
     @foreach ($produks as $item)
       <div class="col col-md-4 mb-5 text-center">
            <div class="card mt-5 ms-4" style="width: 18rem;">
                <!-- Product image-->
                  <img src="/storage/{{ $item->foto }}" width="200" alt="">
                 <div class="card-body text-center">                            
                    <h5 class="card-text">{{$item->namaproduk}}</h5>
                    <p class="card-text">{{$item->merk}}</p>
                    <p class="card-text">{{$item->harga}}</p>
                    <a href="home/card/{{ $item->kdproduk }}" class="btn mt-auto text-white" style="background-color: rgb(36, 79, 197)">View Options</a>
                 </div>
            </div>
        </div>
        @endforeach                           
    </div>
</div>
</div>
</div>
</section>

@endsection
