<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONLINE SHOP</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <style>
        body{
            background-color: rgb(23, 219, 157);
        }
    </style>
    {{-- <form action="/template" method="post"> --}}

    <form action="{{ url('/login/auth') }}" method="post">
        @csrf
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <h3 class="mb-3">Sign in</h3>
    
                      <div class="col-mb-3" class="py-3">
                        <label for="" class="form-lable">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                      <div class="col-mb-3" class="py-3">
                        <label for="" class="form-lable">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Login" class="form-control btn btn-primary">
                    </div> 
                <hr>
                <div class="mb-3 text-center">
                    Apakah Anda Punya Akun? <a href="register">Register</a>
                 </div>
                    <hr class="my-4">
                      <div class="py-3">
                        {{-- <a href="home" class="btn btn-primary btn-user btn-block">
                            login
                        </a>  --}}
                        
                    </div>
                   
                </div>
            </div>
         </div>
        </section>
        {{-- <div class="container h-100">
            <div class="row h-50 d-flex justify-content-center align-items-center">
                <div class="col-md-4 py-4">
                    <h2 class="fw-bold text-center">LOGIN</h2>
                    <div class="col-mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="form-lable">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                    </div> --}}
                                        
                    {{-- <div class="py-3">
                        <a href="home" class="btn btn-primary btn-user btn-block">
                            login
                        </a> --}}
                    {{-- <div class="pt-3">
                        <input type="submit" value="Login" class="form-control btn btn-primary">
                    </div>
                    <div class="mb-3 text-center">
                            Apakah Anda Punya Akun? <a href="register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
    
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>