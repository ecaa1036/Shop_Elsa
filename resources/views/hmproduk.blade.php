@extends('template')
@section('content')
<!-- Section-->
<section>
<div class="container pt-3">
<h3 class="fw-bold py-3"></h3>
  <div class="row justify-content-center">
     @foreach ($produks as $item)
     {{-- <form action="{{ url ('hmproduk/cari') }}" method="get">
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search" name="cari" id="cari">
      <input type="submit" value="SEARCH">
        {{-- <input type="search" name="cari" id="cari"> --}}
    </form> 
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
