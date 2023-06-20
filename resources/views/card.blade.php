<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produk</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
          <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    </head>
    <body>
        <!-- Navigation-->
        {{-- <nav class="py-4 navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Elsa Novianti</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="hmproduk">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Logout</a></li>
                        <li class="nav-item dropdown">
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> --}}
        <!-- Header-->
        {{-- @foreach ($produks as $item) --}}

        <header class="bg-transparent py-5">
            <div class="container px-6 px-lg-6 my-4">
                {{-- @foreach ($produks as $item) --}}
                <div class="row">
                    <div class="col-6">
                        <img src="/storage/{{ $produks->foto }}" width="200" alt="">
                        {{-- <img src="img/dior.jpg" class="card-img-top"  alt="img" width="100" height="500"> --}}

                    </div>
                    <div class="col-6">
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                            <p>SKU:BST-001</p>
                                <!-- Product name-->
                                {{-- <h2 class="fw-bolder">Dior</h2> --}}
                                {{-- <h2 class="mt-3 fw-bold">{{  $produk->kdproduk  }}</h2>                            --}}
                                <h2 class="mt-3 fw-bold">{{  $produks->namaproduk }}</h2>                           
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp {{ $produks->harga}}</span>
                                <p>Rp. {{ $produks->harga}}</p>
                                    {{-- Rp 80.000 --}}
                                <p>{{ $produks->kategori}}</p>
                                <p>{{ $produks->deskripsi}}</p>
                                {{-- <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quo inventore quasi distinctio deleniti quisquam ipsa odio exercitationem neque corporis ad harum, quaerat perferendis ratione id sit ex illo nemo!</P> --}}
                            </div>
                            <div class="d-flex">
                                <input class="form-control text-center me-3" type="num" id="inputQuantity" value="1" style="max-width: 3rem">
                               <button class="text-center btn btn-outline-dark flex-shrink-0" type="button">
                                    {{-- <i class="bi-cart-fill me-1"></i> --}}
                                    <a href="http://api.whatsapp.com/send?phone=083826238485&text=%22Helloooooo%22">
                                 Add to cart</button>
                            </div>
                        </div>
                        <!-- Product actions-->                      

                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            </div>
        </header>
        <!-- Section-->
      
        <!-- Footer-->
        <footer class="py-5 bg-secondary">
            <div class="container"><p class="m-0 text-center text-white">Smk Ypc  &copy; Elsa Novianti</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
