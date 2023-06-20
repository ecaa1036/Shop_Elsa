<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<style>
    body{
        background-color: rgb(61, 222, 122);
    }
</style>
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type:none ;
        margin: 5px;
    }
</style>
<form action="/daftar/create" method="post">
        @csrf
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <h3 class="mb-3">Sign in</h3>
                      <div class="col-mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukan nama">
                    </div> 
                    {{-- <div class="col-mb-3">
                        <label for="" class="form-lable">No Hp</label>
                        <input type="number" name="nohp" id="nohp" class="form-control" placeholder="Masukan nohp">
                    </div> --}}
    
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
                        <input type="submit" value="register" class="form-control btn btn-primary">
                    </div> 
                <hr>
                <div class="mb-3 text-center">
                    Apakah Anda Punya Akun? <a href="login">login</a>
                 </div>
                    <hr class="my-4">
                      <div class="py-3">
                        <div class="py-3">
                            {{-- <a href="login" class="btn btn-primary btn-user btn-block">
                                simpan
                            </a> --}}
                        </div>
                        {{-- <a href="home" class="btn btn-primary btn-user btn-block">
                            login
                        </a>  --}}
                        
                    </div>
                   
                </div>
            </div>
         </div>
</body>
</html>
    
        {{-- <div class="container h-100">
            <div class="row h-50 d-flex justify-content-center align-items-center">
                <div class="col-md-4 py-4">
                    <h2 class="fw-bold text-center">Register</h2>
                    <div class="col-mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukan nama">
                    </div> --}}
                    {{-- <div class="col-mb-3">
                        <label for="" class="form-lable">No Hp</label>
                        <input type="number" name="nohp" id="nohp" class="form-control" placeholder="Masukan nohp">
                    </div> --}}
                    {{-- <div class="col-mb-3">
                        <label for="" class="form-lable">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="form-lable">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password">
                    </div>
                    
                    <div class="py-3">
                        <a href="login" class="btn btn-primary btn-user btn-block">
                            simpan
                        </a>
                    </div> --}}
                    {{-- <div class="pt-3">
                        <input type="submit" value="Register" class="form-control btn btn-primary">
                    </div> --}}
                {{-- </div>
                
            </div>
        </div>
    </form>

