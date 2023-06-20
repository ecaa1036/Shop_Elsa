<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin  - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    {{-- <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


</head>

<body class="bg-gradient-primary">
    <style>
        body{
            background-color: rgb(119, 160, 191);
        }
    </style>
     <form action="{{ url('loginAdmin/auth') }}" method="post">
        @csrf

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                                                    class="img-fluid" alt="Phone image">
                                {{-- <img src="https://img.freepik.com/vector-premium/concepto-oficina-casa-mujer-que-trabaja-casa-estudiante-o-autonomo-ilustracion-vectorial_647843-131.jpg?w=200" alt="100" srcset="" width="500"> --}}
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">

                                        <label class="custom-control-label" for="">Email</label>
                                        <div class="form-group py-2">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" 
                                                placeholder="Enter Email Address...">
                                        </div>

                                        <label class="custom-control-label" for="">Password</label>
                                        <div class="form-group py-2">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="py-3">
                                            <a href="dashbord" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="registerAdmin">Create an Account!</a>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>

</html>